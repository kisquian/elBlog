<?php
include_once('models/Usuario.php');

if( isset($_POST))
{
  // Input hidden en el código
  $userid = $_POST['userid'];

  $data = new stdClass();
  $data->name    = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->email     = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);


  if( $data->name && $data->email ) 
  {
    $usuario = new Usuario();
    $usuario->editarUsuario( $userid, $data );
    header("location:../admin/main.php?msg=user_editado");

  }else{
    header("location:../admin/main.php?msg=error_datos_requeridos");
  }

}else{
  header("location:../index.php?msg=no_data");
}