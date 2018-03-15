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
    

    <div class="row">

      <div class="eight columns">

        <?php if ($postData->status == 0 && !isset($_SESSION["userLogged"]))  {  ?>

        <?php echo "Debes loguearte para ver el post"; ?>

      <?php } else { ?>
          
        

        <article id="principal">
          <h2><?php echo $postData->title; ?></h2>
          <p style="text-align:center"><img src="<?php echo 'upload/'.$postData->img; ?>" alt=""></p>
          <p><?php echo $postData->content; ?></p>
          
          <div class="comments">
            <?php if (empty($commentsById)) { ?>
            <div class="comment">
              No hay comentarios aún
             
            </div>
            <?php } else { ?>

            <?php $c = 0; foreach( $commentsById as $cmt ) {  ?>

            <div class="comment" id="comment">
              <div class="meta"><?php echo $cmt->name; ?></div>
              
              <div><?php echo $cmt->comment; ?><br><br>

                <?php if (isset($_SESSION["userLogged"])) { ?>
                <a <?php echo 'href="app/delete_comment.php?id='.$cmt->id.'&postID='.$postData->id.'"'; ?>>Borrar comentario</a> 
              <?php } ?>
              </div>
            </div>

            <?php $c++;} echo "<strong>Total " . $c . " Comentarios</strong><hr>"; } ?>


            
            </div>
            

            <div class="comentar">

              <form action="app/agregar_comentario.php" method="POST">
                <div class="row">
                <input type="hidden" id="idPost" name="idPost" value="<?php echo $postData->id; ?>">
                    <label for="name"><em>*</em> Nombre</label>
                    <input class="u-full-width" type="text" name="name" placeholder="Juan" id="name" required>
                </div>
                <div class="row">
                  <label for="email"><em>*</em>* E-mail</label>
                  <input class="u-full-width" type="email" name="email" placeholder="nombre@dominio.com" id="email" required>
                </div>
                <div class="row">
                  <label for="comment">* Comentario</label>
                  <textarea class="u-full-width" type="text" name="comment"  id="comment" required></textarea>
                </div>
               
                
                <div style="text-align:center;">
                  <a class="button" style="background-color:#F3F3F3;" href="index.php">Volver</a>
                  <input class="button-primary" type="submit" value="Agregar">
                </div>

              </form>
            </div>

        </article>

        <?php } ?>

        </div>
        
      
      <?php include('sidebar.php') ?>
      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>