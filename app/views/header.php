<a href="index.php"><h1 style="margin-top:10px">Portal del <strong style="color:#B5B5B5;">Cerro!</strong></h1></a>
<a class="button" href="search.php">Buscar un post</a>  <a class="button" href="admin/index.php">Administración</a>
<hr>

<div id="fixed">
	<a href="index.php" class="button button-primary">Ir al Blog</a>
</div>

<?php if (isset($msg)) {
	echo $showMsg;
} ?>