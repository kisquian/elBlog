<?php 
 include_once('inc/includes.php');
  
  $post = new Post();
  $comment = new Comment();
  $published = 1;
  $listaPosts = $post->listarPostsPublicados($published);
  $listComments = $comment->listarComments();
  

  include_once('app/views/home.php');
?>