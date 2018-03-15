<?php
include_once('models/Post.php');

if( isset($_POST))
{
  // Input hidden en el código
  $idPost = intval($_POST['idPost']);
  var_dump($idPost);

  $data = new stdClass();
  $data->title    = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->content     = filter_var($_POST['content'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->status     = intval($_POST['status']);


  if( $data->title && $data->content ) 
  {
    $post = new Post();
    $post->editarPost( $idPost, $data );
    header("location:../admin/main.php?msg=post_editado");
  }else{
    header("location:../admin/main.php?msg=error_datos_requeridos");
  }

}else{
  header("location:../index.php?msg=no_data");
}