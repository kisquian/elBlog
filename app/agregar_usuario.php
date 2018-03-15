<?php
include_once('models/Usuario.php');

if( isset($_POST) ) {
  $returnPage = "registro.php";

  $data = new stdClass();
  $data->nombre       = filter_var($_POST['NameInput'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->password     = filter_var($_POST['PasswordInput'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->passwordConfirm     = filter_var($_POST['PasswordInputConfirm'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->email        = filter_var($_POST['EmailInput'], FILTER_VALIDATE_EMAIL);

/*
  var_dump($data);
  var_dump($imagenRobot);
  die();
*/

  if( $data->nombre && $data->password && $data->email) {
    if ($data->password == $data->passwordConfirm) {
      $data->password = md5($data->password);
      $usuario = new Usuario();
      $usuario->agregarUsuario($data);
      header("location:../admin/index.php?msg=user_added");
    } else {
      header("location:../admin/registro.php?msg=password_not_equal");
    }
  } else {
     header("location:../admin/registro.php?msg=datos_requeridos");
     // Los campos con * son requeridos
  }

} else {
  header("location:../$returnPage?msg=no_data");
}