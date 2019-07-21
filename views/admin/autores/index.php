<?php



    if ( isset($_REQUEST["a"]) )
    {
        switch( $_REQUEST["a"] ){

            case "add":

                include_once PATH_DAOS . '/autoresDAO.php';

                $autor["nombre"] = $_REQUEST["nombre"];

                agregarAutor($autor);

                header("Location: index.php?m=autores");

                break;

            case "edit":

                include_once PATH_DAOS . '/autoresDAO.php';

                $autor["id"] = $_REQUEST["id"];
                $autor["nombre"] = $_REQUEST["nombre"];

                modificarAutor($autor);

                header("Location: index.php?m=autores");

                break;

            case "del":
                include_once PATH_DAOS . '/autoresDAO.php';

                $autor["id"] = $_REQUEST["id"];

                eliminarAutor($autor);

                header("Location: index.php?m=autores");

                break;


        }
    }


    $content = PATH_VIEWS . "/admin/autores/partials/contenido_autores.inc.php";

    include( PATH_VIEWS . '/admin/common/base.php' );