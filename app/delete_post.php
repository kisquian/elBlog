<?php
include_once('models/Post.php');

if( isset($_GET) )
{
  $id = intval($_GET['id']);

  $post = new Post();
  if( $post->eliminarPost( $id ) ) {
    header("location:../admin/main.php?msg=post_deleted");
  }else{
    header("location:../admin/main.php?msg=post_deleted_error");
  }

}else{
  header("location:../admin/main.php?msg=no_data");
}