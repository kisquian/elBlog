<?php
include_once('models/Usuario.php');

if( isset($_GET) )
{
  $id = intval($_GET['id']);

  $usuario = new Usuario();
  if( $usuario->eliminarUsuario( $id ) ) {
    header("location:../admin/main.php?msg=user_deleted");
  }else{
    header("location:../admin/main.php?msg=user_deleted_error");
  }

}else{
  header("location:../main.php?msg=no_data");
}