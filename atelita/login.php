<?php 

	include('config/config.php');

	error_reporting(0);

	if (isset($_GET["usuario"]) && isset($_GET["pass"])){
		$conexion = new mysqli("localhost","root","","atelita_db");

		$consulta = "SELECT * " . 
		"FROM usuarios " . 
		"WHERE nombre = '" . $_GET["usuario"] . "' " .
		"AND password = '" . $_GET["pass"] . "'";

		$resultado = $conexion->query($consulta);

		if ($resultado->num_rows == 1){
			$_SESSION["usuario"]="Admin";
		}
		else{
			echo "Usuario y/o contraseña no válido/s.";
		}
	}
		
	if (!isset($_SESSION["usuario"])){
		$content= PATH_PARTIALS . "/login.inc.php";
		$contentjs= PATH_PARTIALS . "/login.js.php";
		include("base.php");
	}

?>