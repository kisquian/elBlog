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

      <form action="../app/editar_post.php" id="" method="POST">
        <input type="hidden" name="idPost" value="<?php echo $postData->id; ?>">
        <div class="row">
          <div class="u-full-width">
            <label for="name">Titulo</label>
            <input class="u-full-width" type="text" placeholder="Titulo" name="title" value="<?php echo $postData->title; ?>">
          </div>
          <div class="u-full-width">
            <label for="email">Contenido</label>
            <textarea class="u-full-width" type="email" placeholder="Contenido" name="content" cols="9" rows="9"><?php echo $postData->content; ?></textarea>
          </div>
          <div class="u-full-width">
            <label for="Status">Status</label>
                <select name="status" id="status" required>
                  <?php if ($postData->status == 1) { ?>
                    <option value="1" selected="selected">Publicado</option>
                  <option value="0">Borrador</option>
                  <?php } else { ?>
                  <option value="1">Publicado</option>
                  <option value="0" selected="selected">Borrador</option>
                  <?php } ?>
                </select>
              </div>
        </div>
        
        
        <input class="button-primary" type="submit" value="Ingresar" id="btnSubmit">
      </form>


      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>