<?php
include_once("Model.php");
/**
 * Usuario
 */
class Servicio extends Model
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

    public function listarServicios() {
      $sql = null;

      try {
            $sql = $this->_db->query("SELECT * FROM servicios");
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }

    public function listarServiciosPublicados($published) {
      $sql = null;

      try {
            $sql = $this->_db->prepare("SELECT * FROM servicios WHERE status=:Status");
            $sql->execute(array(
              "Status" => $published
            ));
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }

    public function filtrarServicios( $busqueda, $tipo_filtro = self::NOMBRE_EXACTO ) {
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

            $sql = $this->_db->prepare("SELECT * FROM servicios WHERE nombre LIKE :Filtrado");
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

    public function obtenerServicios( $id_servicio ) {
      $result = null;

      try {
          $sql = $this->_db->prepare("SELECT * FROM servicio WHERE id=:IdServicio");
          $sql->execute(array( "IdServicio" => $id_post ));
          $sql->setFetchMode(PDO::FETCH_OBJ);
          $result = $sql->fetch();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $result;
    }

    public function agregarServicio( stdClass $data) {
        $sql = null;
        $this->_lastInsertedId = 0;

        try {
            $sql= $this->_db->prepare ("INSERT INTO servicio(nombre, precio, descripcion) VALUES(:Nombre, :Precio, :Descripcion)");
            $sql->execute(array(
              "Nombre"    => $data->nombre,
              "Precio" => $data->precio,
              "Descripcion" => $data->descripcion
            ));

            $this->_lastInsertedId = $this->_db->lastInsertId();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function editarPost( $idPost, stdClass $data ) {
        $sql = null;

        try {
            $sql= $this->_db->prepare ("UPDATE servicios SET nombre=:Nombre, precio=:Content, status=:Status WHERE id=:idServicio");
            $sql->execute(array(
              "Nombre"    => $data->nombre,
              "Precio" => $data->precio,
              "idServicio" => $idServicio,
              "Status" => $data->status
            ));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function eliminarServicio( $id_servicio ) {
        try {
            $sql = $this->_db->prepare("DELETE FROM servicios WHERE id=:IdServicio");
            $sql->execute(array( "IdServicio" => $id_servicio ));
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
}