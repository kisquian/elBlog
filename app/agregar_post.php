<?php
include_once('models/Post.php');


if( isset($_POST) ) {

  $data = new stdClass();
  $data->title       = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->content     = filter_var($_POST['content'], FILTER_SANITIZE_SPECIAL_CHARS);

  $imagen = $_FILES['img'];

  $tempFile = $imagen['tmp_name'];
  $nombreArchivo = filter_var($imagen['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $destinoFinal = dirname(__FILE__) . '/../upload/';
  var_dump( $destinoFinal);

  $partesNombres = explode('.', strtolower($nombreArchivo));
  $nuevoNombreImagen = str_replace(' ', '_', $partesNombres[0]);
  $extension = end($partesNombres);
  $nuevoNombreImagen.= '_' . md5(uniqid()) . '.' . $extension;

  $archivoFinal = $destinoFinal .  $nuevoNombreImagen;

  $tiposArchivo = array('jpg', 'jpeg', 'gif', 'png');


  if( $data->title && $data->content && $imagen ) {
      
      $post = new Post();
      

     if( in_array($extension, $tiposArchivo) ) {
          //Hago la subida
          if( copy($tempFile, $archivoFinal) ) {
            $post->agregarPost($data, $nuevoNombreImagen);
            header("location:../admin/main.php?msg=post_added");
          }else{
            header("location:../index.php?msg=error_copiando_archivo");
          }
        }else{
          // La extension no está permitida
          header("location:../index.php?msg=error_extension_archivo");
        }

    
  } else {
     header("location:../admin/registro.php?msg=datos_requeridos");
     // Los campos con * son requeridos
  }

} else {
  header("location:../$returnPage?msg=no_data");
}