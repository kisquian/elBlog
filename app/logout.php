<?php session_start();
	include_once("inc/includes.php");

	session_destroy();
	unset($session);

	header("location: ../index.php?msg=logout_true");


?>