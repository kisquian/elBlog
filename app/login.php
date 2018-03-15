<?php
	session_start();
    include_once(  "models/Model.php");
    include_once(  "models/Usuario.php");

    //Este objeto "media" entre la dos páginas (inicio y login);
    $response = new stdClass();
    $response->message = "";
    $response->status = FALSE;
    $response->user = null;

	//Este if es para que no se pueda ingresar al login.php sin formulario previo.
    if (isset($_POST)) {

        $txtUser = filter_var($_POST["txtUser"], FILTER_SANITIZE_SPECIAL_CHARS);
        $txtPass = $_POST["txtPass"];

        $usuario = new Usuario();

        $existeUsuario = $usuario->chequearUsuario($txtUser, $txtPass);

        if ($existeUsuario) {
            $_SESSION["userLogged"] = $existeUsuario;
            //header("location: ../admin/main.php?msg=login_success");
            $response->message = "Ok";
            $response->status = TRUE;
            $response->user = $existeUsuario;

        } else {
            //header("location: ../admin/index.php?msg=login_error");
            $response->message = "Error en el login";
            $response->status = FALSE;
            $response->user = null;
        }

    } else {
        $response->message = "Debes ingresar user y password";
        $response->status = FALSE;
    }
//Le decimos que el archivo tendrá notación json
header("Content-Type:application/json");
echo json_encode($response);
?>