<?php
 include_once('inc/includes.php');

  // Listado de usuarios
  $usuario = new Usuario();
  $listaUsuarios = $usuario->listarUsuarios();

  $post = new Post();
  $listaPosts = $post->listarPosts();

  $comment = new Comment();
  $listaComments = $comment->listarComments();

  


if (isset($_SESSION["userLogged"])) {
  include_once('../app/views/vista_main.php');	
	
} else {
 echo "no tienes permiso para andar por aqui";
}