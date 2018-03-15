<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>ElBlog! Somos los mejores, de una</title>

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <div class="container">
    <?php include_once('header.php') ?>
    

      <div class="row" style="text-align:center;">
      <form method="POST" action="search.php">
        <div class="row">
            <label for="busquedaInput">Buscar:</label>
            <input type="text" name="title" placeholder="Título" id="busquedaInput">
            <select name="tipoBusquedaSelect">
              <option value="1">Empiece con...</option>
              <option value="2">Termine con...</option>
          </select>
          <input type="submit" class="button button-primary" value="Buscar"/>
        </div>
      </form>
    </div>
    <div class="row" style="text-align:center;">
      <a class="button button-primary" href="index.php">Volver</a>
    </div>
    <div class="row">
      <table class="u-full-width">
        <thead>
          <tr>
            <th>Titulo</th>
          </tr>
        </thead>
        <tbody>
<?php
  /*
   * Listado de usuarios
   */
  $filtroBusqueda = '';
  $tipoFiltro = Post::EMPIEZA_CON;

  if( isset($_POST['title']) ) {
    $filtroBusqueda = $_POST['title'];
  }

  if( isset($_POST['tipoBusquedaSelect']))
  {
    $tipo = $_POST['tipoBusquedaSelect'];

    switch( $tipo ) {
      case 1:
        $tipoFiltro = Post::EMPIEZA_CON;
        break;
      case 2:
        $tipoFiltro = Post::TERMINA_CON;
        break;
    }
  }

  $listaPosts = $post->filtrarPosts($filtroBusqueda, $tipoFiltro);

  if ($listaPosts)
  {
    foreach( $listaPosts as $pst ) {
?>
        <tr>
          <td><a href="post.php?id=<?php echo $pst->id ?>"><?php echo $pst->title ?></a></td>
        </tr>
<?php
    }
  }
?>
        </tbody>
      </table>
    </div>
      
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>