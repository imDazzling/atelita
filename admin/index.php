<?php
    session_start();

    include('../config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "generos_pub":
                $modulo = "generos_pub";
                break;

            case "libros_pubs":
                $modulo = "libros_pub";
                break;

            case "cap_pubs":
                $modulo = "capitulos_pub";
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