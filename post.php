<?php
  include_once('inc/includes.php');

  $post = new Post();
  $comment = new Comment();

  $postId = filter_var( $_GET['id'], FILTER_VALIDATE_INT );
  $postData = $post->obtenerPost($postId);
  $commentsById = $comment->obtenerCommentPublicados($postId);
  $listComments = $comment->listarComments();
 

  include_once('app/views/detalle_post.php');

  ?>
