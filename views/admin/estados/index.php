<?php



    if ( isset($_REQUEST["a"]) )
    {
        switch( $_REQUEST["a"] ){

            case "add":

                include_once PATH_DAOS . '/estadoDAO.php';

                $estado["nombre"] = $_REQUEST["nombre"];

                agregarEstado($estado);

                header("Location: index.php?m=estados");

                break;

            case "edit":

                include_once PATH_DAOS . '/estadoDAO.php';

                $estado["id"] = $_REQUEST["id"];
                $estado["nombre"] = $_REQUEST["nombre"];

                modificarEstado($estado);

                header("Location: index.php?m=estados");

                break;

            case "del":
                include_once PATH_DAOS . '/estadoDAO.php';

                $estado["id"] = $_REQUEST["id"];

                eliminarEstado($estado);

                header("Location: index.php?m=estados");

                break;


        }
    }


    $content = PATH_VIEWS . "/admin/estados/partials/contenido_estados.inc.php";

    include( PATH_VIEWS . '/admin/common/base.php' );