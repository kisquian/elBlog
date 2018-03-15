<?php
include_once('models/Comments.php');

if( isset($_POST) )
{
  $data = new stdClass();
  $data->email     = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);



  if($data->email) {
    $comment = new Comment();

    $comment->agregarEmail($data);

    header("location:../index.php?msg=Suscrito_con_exito");
    
  }else{
     header("location:../index.php?msg=error_datos_requeridos");
     // Los campos con * son requeridos
  }

}else{
  header("location:../index.php?msg=no_data");
}