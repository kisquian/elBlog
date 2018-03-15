<?php
include_once('models/Comments.php');

if( isset($_POST) )
{
  $data = new stdClass();
  $data->name    = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->email     = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $data->comment  = filter_var($_POST['comment'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->idPost  = intval($_POST['idPost']);


  if( $data->name && $data->email && $data->comment) {
    $comment = new Comment();

    $comment->agregarComment($data);

    header("location:../post.php?id=".$data->idPost."&msg=Comentario_agregado_correctamente");
    
  }else{
     header("location:../index.php?msg=error_datos_requeridos");
     // Los campos con * son requeridos
  }

}else{
  header("location:../index.php?msg=no_data");
}