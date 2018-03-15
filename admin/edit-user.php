<?php
 include_once('inc/includes.php');

  // Listado de usuarios
  $usuario = new Usuario();
  $idUsuario = intval($_GET['id']);
  $userData = $usuario->obtenerUsuario($idUsuario);
  


if (isset($_SESSION["userLogged"])) {
  	include_once('../app/views/vista_editUser.php');
} else {
 header("location: http://localhost/elBlogLite/admin/main.php?msg=no_estas_logueado");
}