<?php
    session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "catalogo":
                $modulo = "catalogo";
                break;

            case "lib":
                $modulo = "library";
                break;

            case "read":
                $modulo = "reader";
                break;

            case "logout":
                $modulo = "logout";
                break;

            case "login":
                $modulo = "login";
                break;
                    
            case "default":
                echo "error404";

        }
    }

    include('views/' . $modulo . '/index.php'); 

?>