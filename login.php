<?php 

	session_start();

	include('config/config.php');

	include PATH_HELPERS . '/database_helper.php';

	if (isset($_POST["usuario"]) && isset($_POST["pass"])){

		$conexion = getConexion();

		$consulta = "SELECT * " . 
					"FROM usuarios " . 
					"WHERE nombre = '" . $_POST["usuario"] . "' " .
					"AND password = '" . $_POST["pass"] . "'";

		$resultado = $conexion->query($consulta);

		if ($resultado->num_rows == 1){

			$usuario = $resultado->fetch_assoc();

			$_SESSION["usuario"] = $usuario["nombre"];
			$_SESSION["id_usuario"] = $usuario["id"];

			$mensaje_alerta = "Conectado";
		}
		else{
			$mensaje_alerta = "Usuario y/o contraseña no válido/s.";
		}
	}
	else{
		$mensaje_alerta = "";
	}

	if (isset($_POST["usuario_reg"]) && isset($_POST["email_reg"]) && isset($_POST["pass_reg"]) && isset($_POST["copypass_reg"])){

		$conexion = getConexion();

		/* MENSAJES SI YA ESTÁN REGISTRADOS */

		if (isset($_POST["usuario_reg"])){

		$consulta = "SELECT * " . 
					"FROM usuarios " . 
					"WHERE nombre = '" . $_POST["usuario_reg"] . "'";

		$resultado = $conexion->query($consulta);

		if ($resultado->num_rows == 1){

			$usuario = $resultado->fetch_assoc();

			$_SESSION["usuario_reg"] = $usuario["nombre"];
			$_SESSION["id_usuario"] = $usuario["id"];

			$mensaje_reg = "Nombre de usuario ya registrado.";
		}
	}

		if (isset($_POST["email_reg"])){

		$consulta = "SELECT * " . 
					"FROM usuarios " . 
					"WHERE email = '" . $_POST["email_reg"] . "'";

		$resultado = $conexion->query($consulta);

		if ($resultado->num_rows == 1){

			$usuario = $resultado->fetch_assoc();

			$_SESSION["usuario_reg"] = $usuario["nombre"];
			$_SESSION["id_usuario"] = $usuario["id"];

			$mensaje_reg = "Dirección de correo ya registrada.";
		}
	}

		/* SI LAS CONTRASEÑAS SON DIFERENTES */

		if (isset($_POST["pass_reg"]) == isset($_POST["copypass_reg"])){

		}
		else{
			$mensaje_reg = "Hay diferencias entre las dos contraseñas escritas.";
		}

		$registry = "INSERT INTO `usuarios` (`nombre`, `password`, `email`)" .
					"VALUES ([" . $_POST["usuario_reg"] . "]," .
					"[" . $_POST["pass_reg"] . "]," .
					"[" . $_POST["email_reg"] . "])";

	}
	else{
		$mensaje_reg = "";
	}


	$content= PATH_PARTIALS . "/login.inc.php";
	$contentjs= PATH_PARTIALS . "/login.js.php";
	include_once("base.php");

?>