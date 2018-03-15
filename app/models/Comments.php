<?php
include_once("Model.php");
/**
 * Usuario
 */
class Comment extends Model
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

    public function listarComments() {
      $sql = null;

      try {
            $sql = $this->_db->query("SELECT * FROM comments");
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }


    public function obtenerCommentPublicados($postId) {
      $sql = null;

      try {
            $sql = $this->_db->prepare("SELECT * FROM comments WHERE idPost=:PostiD and status=1");
            $sql->execute(array(
              "PostiD" => $postId
            ));
            $sql->setFetchMode(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return $sql;
    }

    public function aprobarComment( $idComment ) {
        $sql = null;

        try {
            $sql= $this->_db->prepare ("UPDATE comments SET status=1 WHERE id=:idComment");
            $sql->execute(array(
              "idComment" => $idComment
            ));
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function agregarComment( stdClass $data ) {
        $sql = null;
        $this->_lastInsertedId = 0;

        try {
            $sql= $this->_db->prepare ("INSERT INTO comments(name, email, comment, idPost) VALUES(:Nombre, :Email, :Comentario, :idPost)");
            $sql->execute(array(
              "idPost"    => $data->idPost,
              "Nombre"    => $data->name,
              "Email"    => $data->email,
              "Comentario"  => $data->comment
            ));

            $this->_lastInsertedId = $this->_db->lastInsertId();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    public function eliminarComment( $id_comment ) {
        try {
            $sql = $this->_db->prepare("DELETE FROM comments WHERE id=:Idcomment");
            $sql->execute(array( "Idcomment" => $id_comment ));
            return ($sql->rowCount() > 0) ? true : false;
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }
    }

    public function agregarEmail( stdClass $data ) {
        $sql = null;
        $this->_lastInsertedId = 0;

        try {
            $sql= $this->_db->prepare ("INSERT INTO suscrbite(email) VALUES(:Email)");
            $sql->execute(array(
              "Email"    => $data->email
            ));

            $this->_lastInsertedId = $this->_db->lastInsertId();
        } catch(PDOException $e) {
            $this->_error = $e->getMessage();
        }

        return ($sql->rowCount() > 0) ? true : false;
    }

    /**
     * Retorna el ID del último registro insertado
     * @return int
     */
    public function obtenerIdUltimoRegistro() {
      return (int) $this->_lastInsertedId;
    }
}

