


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

    <div class="u-full-width">
      <div id="posts">
        <h4>Posts</h4>
      <table class="u-full-width">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
                $count = 0;
                foreach( $listaPosts as $pst ) { 
               ?>
                
                <tr>
                      <td><strong><?php echo $pst->id ?></strong></td>
                      <td><a <?php echo 'href="../post.php?id='. $pst->id.'"'; ?> ><?php echo $pst->title ?></a> <?php if ($pst->status == 0) { echo " - Borrador";}?></td>
                      <td><a  <?php echo 'href="../app/delete_post.php?id='. $pst->id.'"'; ?> >Borrar</a></td>
                      <td><a   <?php echo 'href="edit.php?id='. $pst->id.'"'; ?> >Editar</a></td>
                </tr>
              <?php
                 }
              ?>

        </tbody>
      </table>
      </div>
</div>


    <div class="u-full-width">
        <div id="users">
          <h4>Usuarios</h4>
      <table class="u-full-width">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
                $count = 0;
                foreach( $listaUsuarios as $usr ) { ?>
                <tr>
                      <td><strong><?php echo $usr->id ?></strong></td>
                      <td><?php echo $usr->name ?></td>
                      <td><a  <?php echo 'href="../app/delete_usuario.php?id='. $usr->id.'"'; ?> >Borrar</a></td>
                      <td><a   <?php echo 'href="edit-user.php?id='. $usr->id.'"'; ?> >Editar</a></td>
                </tr>
              <?php
                 }
              ?>

        </tbody>
      </table>
        </div>
    </div>

    <div class="u-full-width">
        <div id="users">
          <h4>Comentarios</h4>
      <table class="u-full-width">
        <thead>
          <tr>
            <th>ID</th>
            <th>Comentario</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
                $count = 0;
                foreach( $listaComments as $cmt ) { ?>
                <tr>
                      <td><strong><?php echo $cmt->id ?></strong></td>
                      <td><?php echo $cmt->comment ?> <?php if ($cmt->status == 0) { echo " - <strong style='color:red'>No aprobado</strong>";} elseif ($cmt->status == 1) {echo "<strong style='color:green'>Aprobado</strong>";}?></td>
                      <td><a  <?php echo 'href="../app/delete_comment.php?id='. $cmt->id.'&postID='.$cmt->idPost.'"'; ?> >Borrar</a></td>
                      <td><a   <?php echo 'href="../app/aprobar_comentario.php?id='. $cmt->id.'"'; ?> >Aprobar</a></td>
                </tr>
              <?php
                 }
              ?>

        </tbody>
      </table>
        </div>
    </div>
      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>