<?php if (isset($_SESSION["userLogged"])) { ?><a href="main.php">
<?php } else {  ?>
<a href="index.php">
<?php } ?>
	<h1 style="margin-top:10px;">
		El<strong style="color:#B5B5B5;">Blog!</strong> | Administración
	</h1> 
</a>
<?php if (isset($_SESSION["userLogged"])) { ?>
<a href="write.php" class="button button-primary">Escribir un post</a>
<a href="../app/logout.php">Cerrar sesion</a><?php } ?>
<hr>
<div id="fixed">
	<a href="../index.php" class="button button-primary">Ir al Blog</a>
</div>

<?php if (isset($msg)) {
	echo $showMsg;
} ?>
