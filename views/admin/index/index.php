<?php
    
    include_once PATH_HELPERS . '/database_helper.php';

    if ( isset( $_POST["usuario"] )  && $_POST["pass"] != "" ){

            $conexion = getConexion();

            $consulta = "SELECT * " . 
                        "FROM usuarios " .
                        "WHERE nombre_usuarios = '" . $_POST["usuario"] . "' AND password_usuarios = '" . $_POST["pass"] . "'";

            $resultado = $conexion->query( $consulta );

            if ( $resultado->num_rows == 1  ){

                //Obtengo el nombre del usuario

                $usuario = $resultado->fetch_assoc();

                $_SESSION["usuario"] = $usuario["nombre_usuarios"];
                $_SESSION["permiso_usuario"] = $usuario["permisos_usuarios"];

            }
            else{
                $mensaje_alerta = "Usuario y/o contraseña no valida";
            }
        }
        else{
            $mensaje_alerta = "Debe completar el usuario y la contraseña";
        }


    if ( !isset($_SESSION["usuario"] ) ){

        $content = PATH_VIEWS . "/admin/index/partials/login_admin.inc.php";
    }
    else{



        $conexion = getConexion();

        $consulta = "SELECT permisos_usuarios FROM `usuarios` WHERE nombre_usuarios='" . $_SESSION["usuario"] . "'";

        $resultado = $conexion->query( $consulta );

        $array_permisos = array();

        $id_permisos = $resultado->fetch_assoc();

        $array_permisos[] = $id_permisos["permisos_usuarios"];

        if('1' == implode(" ",$array_permisos)){
            $content = PATH_VIEWS . "/admin/index/partials/contenido_index_admin.inc.php";
        }
        else{
            $mensaje_alerta = "Área restringida: Usuario sin acceso a esta área.";
            $content = PATH_VIEWS . "/admin/index/partials/login_admin.inc.php";
        }
    }

    include( PATH_VIEWS . '/admin/common/base.php' );

        
?>

