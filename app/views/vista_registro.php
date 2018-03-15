


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

    <h1>Registro</h1>
            <form id="frmRegister" action="../app/agregar_usuario.php" method="POST" enctype="multipart/form-data">
            <!-- Formulario -->
              
                <div class="row">
                  <div class="u-full-width">
                  <label for="NameInput">Nombre</label>
                  <input class="u-full-width" type="text" placeholder="Juan Garc&iacute;a" id="NameInput" name="NameInput" required>
                </div>
                </div>
                <div class="row">
                  <div class="six columns">
                  <label for="PasswordInput">Password</label>
                  <input class="u-full-width" type="password" placeholder="Contraseña" id="PasswordInput" name="PasswordInput" required>
                </div>
                <div class="six columns">
                  <label for="PasswordInputConfirm">Confirmar Password</label>
                  <input class="u-full-width" type="password" placeholder="Contraseña" id="PasswordInputConfirm" name="PasswordInputConfirm" required>
                </div>
                </div>
              
              <div class="row">
                <div class="u-full-width">
                <label for="EmailInput">Email</label>
                <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="EmailInput" name="EmailInput" required>
              </div>
              </div>
              
              
                <input type="submit" class="button-primary" id="submitInput" value="Crear mi usuario!" />
             
            <!-- Formulario -->
            </form>
      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>