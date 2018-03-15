


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>ElBlog! Somos los mejores, de una</title>

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../style.css">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <?php include_once('headerAdmin.php') ?>
    

    <div class="row">

    <h1>Escribir un post</h1>
            <form id="frmRegister" action="../app/agregar_post.php" method="POST" enctype="multipart/form-data">
            <!-- Formulario -->
              
                <div class="row">
                  <div class="u-full-width">
                  <label for="Title">Title</label>
                  <input class="u-full-width" type="text" placeholder="Juan Garc&iacute;a" id="title" name="title" required>
                </div>
                
              
              <div class="u-full-width">
              <label for="img">Imagen destacada</label>
                      <input id="imagenRobot" name="img" type="file" />

            </div>

                <div class="u-full-width">
                <label for="Content">Content</label>
                <textarea class="u-full-width" placeholder="Contenido aqui" id="content" name="content" required></textarea>
              </div>

              <div class="u-full-width">
                <select name="status" id="" required>
                  <option value="1">Publicado</option>
                  <option value="0">Borrador</option>
                </select>
              </div>
              </div>
              
              
                <input type="submit" class="button-primary" id="submitInput" value="Crear post ahora!" />
             
            <!-- Formulario -->
            </form>
      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>