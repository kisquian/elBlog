<?php include_once("inc/globalVars.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $the_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="style.css">
  <?php include_once("ads/analyticstracking.php") ?>
</head>
<body>
  <div class="container">
    <?php include_once('header.php') ?>
    <div class="row">
      <div class="eight columns">
              <?php
                $count = 0;
                foreach( $listaServicios as $srv) { ?>
                      <article id="<?php echo $srv->idServicio ?>">
                      <a href="post.php?id=<?php echo $srv->id ?>"><h2><?php echo $srv->nombre ?></h2></a>
                      <a href="post.php?id=<?php echo $srv->id ?>"><p style="text-align:center"><img src="<?php echo 'upload/'.$srv->img; ?>" alt=""></p></a>
                      <p><?php echo substr( ($srv->descripcion), 0, strrpos( substr( ($srv->descripcion), 0, 240), ' ' ) ); ?>...</p>
                    </article>
              <?php
                 }
              ?>
      </div>
      <?php include('sidebar.php') ?>
    </div>
  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>