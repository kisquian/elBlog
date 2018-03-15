<?php
 include_once('inc/includes.php');

  // Listado de usuarios
  $post = new Post();
  $idPost = intval($_GET['id']);
  $postData = $post->obtenerPost($idPost);
  


if (isset($_SESSION["userLogged"])) {
  	include_once('../app/views/vista_editPost.php');
} else {
 header("location: http://localhost/elBlogLite/admin/main.php?msg=no_estas_logueado");
}