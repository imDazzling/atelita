<?php 

	include PATH_HELPERS . '/database_helper.php';

	if (isset($_POST["usuario"]) && isset($_POST["pass"])){

		$conexion = getConexion();

		$consulta = "SELECT * " . 
					"FROM usuarios " . 
					"WHERE nombre_usuarios = '" . $_POST["usuario"] . "' " .
					"AND password_usuarios = '" . $_POST["pass"] . "'";

		$resultado = $conexion->query($consulta);

		if ($resultado->num_rows == 1){

			$usuario = $resultado->fetch_assoc();

			$_SESSION["usuario"] = $usuario["nombre_usuarios"];
			$_SESSION["id_usuarios"] = $usuario["id_usuarios"];

			header("Location: index.php");
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

		if (isset($_POST["usuario_reg"])){

			$consulta = "SELECT * " . 
						"FROM usuarios " . 
						"WHERE nombre_usuarios = '" . $_POST["usuario_reg"] . "'";

			$resultado = $conexion->query($consulta);

			if ($resultado->num_rows == 1){

				$usuario = $resultado->fetch_assoc();

				$_SESSION["usuario_reg"] = $usuario["nombre_usuarios"];
				$mensaje_reg = "Nombre de usuario ya registrado.";
			}
			else{
				if (isset($_POST["email_reg"])){

					$consulta = "SELECT * " . 
						"FROM usuarios " . 
						"WHERE email_usuarios = '" . $_POST["email_reg"] . "'";

					$resultado = $conexion->query($consulta);

					if ($resultado->num_rows == 1){

						$usuario = $resultado->fetch_assoc();

						$_SESSION["email_reg"] = $usuario["email_usuarios"];
						$mensaje_reg = "Dirección de correo ya registrada.";
					}
					else{
						if (isset($_POST["pass_reg"]) == isset($_POST["copypass_reg"])){

							$conexion = getConexion();

							$usuario = $_POST["usuario_reg"];
							$password = $_POST["pass_reg"];
							$email = $_POST["email_reg"];

							$registry = "INSERT INTO usuarios " .
							"(nombre_usuarios, password_usuarios, email_usuarios) " .
							"VALUES ('" . $usuario . "', '" . $password . "', '" . $email . "')";

							$conexion->query($registry);

							if (!$conexion->connect_errno ) {
								$mensaje_reg = "Usuario registrado correctamente.";
							}
							else {
								$mensaje_reg = "Error en la conexión.";
							}
						}
						else{
							$mensaje_reg = "Hay diferencias entre las dos contraseñas escritas.";
						}
					}
				}

			}
		}

	}
	else{
		$mensaje_reg = " ";
	}


	$content= PATH_VIEWS . "/login/partials/login.inc.php";
	$contentjs= PATH_VIEWS . "/login/partials/login.js.php";
	include_once( PATH_VIEWS . "/common/base.php");