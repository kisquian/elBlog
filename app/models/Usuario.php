<?php
include_once('Model.php');
/**
 * Usuario
 */
class Usuario extends Model
{
    const NOMBRE_EXACTO = 'exact';
    const EMPIEZA_CON = 'init';
    const TERMINA_CON = 'final';

    // Variable privada que almacena el objeto PDO
    private $_db;

    private $_lastInsertedId = 0;

    /**
     * [__construct description]
     */
    public function __construct() {
        // Creamos una nueva conexión
        $this->_db = Model::getInstance();
    }

    public function listarUsuarios() {
      $sql = null;

      try {
            $sql = $this->_db->query("SELECT * FROM user");
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }

    public function filtrarUsuarios( $busqueda, $tipo_filtro = self::NOMBRE_EXACTO ) {
      $result = null;

      try {
            $filtrado = "='".$busqueda."'";

            switch( $tipo_filtro ) {
              case self::NOMBRE_EXACTO:
                $filtrado = $busqueda;
                break;
              case self::EMPIEZA_CON:
                $filtrado = $busqueda ."%";
                break;
              case self::TERMINA_CON:
                $filtrado = "%" . $busqueda;
                break;
            }

            $sql = $this->_db->prepare("SELECT * FROM user WHERE name LIKE :Filtrado");
            $sql->execute(array(
              "Filtrado" => $filtrado
            ));
            $sql->setFetchMode(PDO::FETCH_OBJ);
            $result = $sql->fetchAll();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $result;
    }

    public function obtenerUsuario( $id_usuario ) {
      $result = null;

      try {
          $sql = $this->_db->prepare("SELECT * FROM user WHERE id=:IdUsuario");
          $sql->execute(array( "IdUsuario" => $id_usuario ));
          $sql->setFetchMode(PDO::FETCH_OBJ);
          $result = $sql->fetch();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $result;
    }

    public function agregarUsuario( stdClass $data ) {
        $sql = null;
        $this->_lastInsertedId = 0;

        try {
            $sql= $this->_db->prepare ("INSERT INTO user(name, password, hash, email) VALUES(:Nombre, :Password, :Hash, :Correo)");
            $sql->execute(array(
              "Nombre"    => $data->nombre,
              "Password"  => $data->password,
              "Hash"      => md5(uniqid()),
              "Correo"    => $data->email
            ));

            $this->_lastInsertedId = $this->_db->lastInsertId();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function editarUsuario( $userid, stdClass $data ) {
        $sql = null;

        try {
            $sql= $this->_db->prepare ("UPDATE user SET name=:Nombre, email=:Email WHERE id=:idUsuario");
            $sql->execute(array(
              "Nombre"    => $data->name,
              "Email"    => $data->email,
              "idUsuario" => $userid
            ));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function eliminarUsuario( $id_usuario ) {
        try {
            $sql = $this->_db->prepare("DELETE FROM user WHERE id=:IdUsuario");
            $sql->execute(array( "IdUsuario" => $id_usuario ));
            return ($sql->rowCount() > 0) ? true : false;
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }
    }

    /**
     * Retorna el ID del último registro insertado
     * @return int
     */
    public function obtenerIdUltimoRegistro() {
      return (int) $this->_lastInsertedId;
    }

    /**
     * Chequear Usuario para login
     * @return int
     */
    public function chequearUsuario($txtUser, $txtPass) {
      $result = null;
      $txtPass = md5($txtPass);
      try {
        $sql = $this->_db->prepare("SELECT id, name, email FROM user WHERE name=:Nombre AND password=:Pass");
        $sql->execute(array(
          "Nombre" => $txtUser,
          "Pass" => $txtPass
        ));

        $sql->setFetchMode(PDO::FETCH_OBJ);

        $result = $sql->fetch();

      } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }
      return $result;
    }


//END CLASS USUARIO    
}