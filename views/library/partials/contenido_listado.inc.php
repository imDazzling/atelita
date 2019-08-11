<?php

if ( isset( $_SESSION["id_usuarios"] ) ) {

    $es_library = buscarLibreria($_SESSION["id_usuarios"]);

    if($es_library){

        $busqueda = "";

        if ( isset($_GET["buscar"]) ){
            $busqueda = $_GET["buscar"];
        }

        $id_generos = -1;

        if ( isset($_GET["generos"]) ){
            $id_generos = $_GET["generos"];
        }

        $estados = -1;

        if ( isset( $_GET["estados"]) ){
                $estados = $_GET["estados"];
        }

        foreach ($es_library as $library){

            $libros = buscarLibros( $busqueda, $id_generos, $estados, $library);
            
            if ($libros){
                foreach ($libros as $libro) {

                    crearHTMLCardLibro($libro['nombre_libros'], $libro['portada_libros'], $libro['descripcion_libros'], $libro['id_generos'], $libro['id_libros'], $libro['id_estado'], false, false );
                    
                }
            }
        }
    }
}