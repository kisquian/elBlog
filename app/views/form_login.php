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

    <div class="cartel">
      Sesion autenticada efectivamente, redirigiendo a la administración...
    </div>
    <div class="cartel_error">
      Usuario y/contraseña incorrectas, intantalo nuevamente
    </div>
    

    <div class="row">

      <form action="../app/login.php" id="form" method="POST">
        <div class="row">
          <div class="u-full-width">
            <label for="txtUser">Usuario</label>
            <input class="u-full-width" type="text" placeholder="Tu usuario" id="txtUser" name="txtUser">
          </div>
          <div class="u-full-width">
            <label for="txtPass">Password</label>
            <input class="u-full-width" type="password" placeholder="Password" id="txtPass" name="txtPass">
          </div>
        </div>
        
        <input class="button-primary" type="submit" value="Ingresar" id="btnSubmit">
      </form>

      <hr>

      ¿Eres nuevo por aquí? <a href="registro.php" class="button button-secondary">Create una cuenta ahora</a>


      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="../js/script.js"></script>
</body>
</html>