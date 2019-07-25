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
        $content = PATH_VIEWS . "/admin/index/partials/contenido_index_admin.inc.php";
    }

    /*$contenido_listado  = PATH_VIEWS . "/index/partials/listado_index.inc.php";*/

    include( PATH_VIEWS . '/admin/common/base.php' );


/* CONEXIÓN ÚNICA DE ADMIN

$conexion = getConexion();

        $consulta = "SELECT id_usuarios " .
                    "FROM usuarios " .
                    "WHERE nombre_usuarios = '" . $_POST["usuario"] . "'";

        $resultado = $conexion->query($consulta);

        $id_usuario = $resultado->fetch_assoc();

        $consulta2 = "SELECT id_tipo_de_usuarios " .
                     "FROM permisos_usuarios " .
                     "WHERE id_usuarios = '" . $id_usuario ."'";

        $resultado = $conexion->query($consulta2);

        */

        
?>

