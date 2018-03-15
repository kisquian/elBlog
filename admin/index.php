<?php  include_once('inc/includes.php');

  // Listado de usuarios
  $usuario = new Usuario();
  $listaUsuarios = $usuario->listarUsuarios();

 if (!isset($_SESSION["userLogged"])) {
  include_once('../app/views/form_login.php');
  
} else {
	header("location: main.php");
}

  # else if...