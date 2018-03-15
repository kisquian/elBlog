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

  <?php include_once("ads/analyticstracking.php") ?>



</head>

<body>



  <div class="container">

    <?php include_once('header.php') ?>

  



    <div class="row">



      <div class="eight columns">



              <?php

                $count = 0;

                foreach( $listaPosts as $pst ) { ?>



                      <article id="<?php echo $pst->idPost ?>">

                      <a href="post.php?id=<?php echo $pst->id ?>"><h2><?php echo $pst->title ?></h2></a>

                      <a href="post.php?id=<?php echo $pst->id ?>"><p style="text-align:center"><img src="<?php echo 'upload/'.$pst->img; ?>" alt=""></p></a>

                      <p><?php echo substr( ($pst->content), 0, strrpos( substr( ($pst->content), 0, 240), ' ' ) ); ?>...</p>

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