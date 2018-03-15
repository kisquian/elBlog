<?php session_start();

$root = $_SERVER["DOCUMENT_ROOT"].'/elBlog';

include_once('../app/models/Post.php');
include_once('../app/models/Comments.php');
include_once('../app/models/Usuario.php');

if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
	if ($msg == "login_error") {
	$msgText = "Usuario y/o contraseña incorrecta";}

	if ($msg == "login_success") {
	$msgText = "Has iniciado sesión satisfactoriamente";}

	if ($msg == "post_added") {
	$msgText = "Post agregado satisfactoriamente";}

	if ($msg == "password_not_equal") {
	$msgText = "Los password no coinciden, intentalo de nuevo";}

	if ($msg == "user_added") {
	$msgText = "Usuario agregado satisfactoriamente, gracias!";}

	if ($msg == "post_deleted") {
	$msgText = "El post ha sido borrado correctamente";}

	if ($msg == "user_deleted") {
	$msgText = "El usuario ha sido eliminado";}

	if ($msg == "post_editado") {
	$msgText = "El post ha sido modificado";}

	if ($msg == "user_editado") {
	$msgText = "El usuario ha sido editado correctamente";}

	if ($msg == "comment_aproved") {
	$msgText = "Comentario aprobado";}

	if ($msg == "sin_efecto") {
	$msgText = "Accion sin efecto";}

	if ($msg == "comment_deleted") {
	$msgText = "Comentario eliminado";}

	

	$showMsg = "<div class='mensaje'>".$msgText."</div>";

}