<?php


    if ( isset($_REQUEST["a"]) )
    {
        switch( $_REQUEST["a"] ){

            case "add":

                include_once PATH_DAOS . '/generosDAO.php';

                $genero["nombre"] = $_REQUEST["nombre"];
                $genero["descripcion"] = $_REQUEST["descripcion"];

                agregarGenero($genero);

                header("Location: index.php?m=generos");

                break;

            case "edit":

                include_once PATH_DAOS . '/generosDAO.php';

                $genero["id"] = $_REQUEST["id"];
                $genero["nombre"] = $_REQUEST["nombre"];
                $genero["descripcion"] = $_REQUEST["descripcion"];

                modificarGenero($genero);

                header("Location: index.php?m=generos");

                break;

            case "del":
                include_once PATH_DAOS . '/generosDAO.php';

                $genero["id"] = $_REQUEST["id"];

                eliminarGenero($genero);

                header("Location: index.php?m=generos");

                break;


        }
    }


    $contenido = PATH_VIEWS . "/admin/generos/partials/contenido_generos.inc.php";

    include( PATH_VIEWS . '/admin/common/base.php' );