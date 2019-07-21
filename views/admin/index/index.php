<?php

    include_once PATH_HELPERS . '/database_helper.php';


    if ( isset( $_POST["login"] ) ){

        if ( isset( $_POST["usuario"] )  && $_POST["password"] != "" ){

            $conexion = getConexion();

            $consulta = "SELECT * " . 
                        "FROM usuarios " .
                        "WHERE nombre = '" . $_POST["usuario"] . "' AND pass = '" . $_POST["password"] . "'";

            $resultado = $conexion->query( $consulta );

            if ( $resultado->num_rows == 1  ){

                //Obtengo el nombre del usuario

                $admin = $resultado->fetch_assoc();

                $_SESSION["admin"] = $usuario["nombre"];
                

            }
            else{
                $mensaje_alerta = "Usuario y/o contraseña no valida";
            }
        }
        else{
            $mensaje_alerta = "Debe completar el usuario y la contraseña";
        }

    }


    if ( !isset($_SESSION["admin"] ) ){

        $contenido = PATH_VIEWS . "/admin/index/partials/login_admin.inc.php";
    }
    else{
        $contenido = PATH_VIEWS . "/admin/index/partials/contenido_index_admin.inc.php";
    }

    /*$contenido_listado  = PATH_VIEWS . "/index/partials/listado_index.inc.php";*/

    include( PATH_VIEWS . '/admin/common/base.php' );

?>