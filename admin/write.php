<?php
 include_once('inc/includes.php');

  // Listado de usuarios
  $post = new post();
  $listaPost = $post->listarPosts();

  


if (isset($_SESSION["userLogged"])) {
	include_once('../app/views/vista_write.php');
} else {
  	header("location: /registro.php?msg=debes_Estar_logueado");
 
}