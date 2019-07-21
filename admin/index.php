<?php
    session_start();

    include('../config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "generos":
                $modulo = "generos";
                break;

            case "libros":
                $modulo = "libros";
                break;

            case "caps":
                $modulo = "capitulos";
                break;

            case "logout":
                $modulo = "logout";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include( PATH_VIEWS .'/admin/' . $modulo . '/index.php'); 

?>