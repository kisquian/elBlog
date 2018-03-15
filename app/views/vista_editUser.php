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

      <form action="../app/editar_usuario.php" id="" method="POST">
        <input type="hidden" name="userid" value="<?php echo $userData->id; ?>">
        <div class="row">
          <div class="u-full-width">
            <label for="name">Nombre</label>
            <input class="u-full-width" type="text" placeholder="Nombre" id="name" name="name" value="<?php echo $userData->name; ?>">
          </div>
          <div class="u-full-width">
            <label for="email">Email</label>
            <input class="u-full-width" type="email" placeholder="Email" id="email" name="email" value="<?php echo $userData->email; ?>">
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