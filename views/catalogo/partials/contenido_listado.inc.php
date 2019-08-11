<?php

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

	$libros = buscarLibros( $busqueda, $id_generos, $estados, false);
    
	if ($libros){
		foreach ($libros as $libro) {

			crearHTMLCardLibro($libro['nombre_libros'], $libro['portada_libros'], $libro['descripcion_libros'], $libro['id_generos'], $libro['id_libros'], $libro['id_estado'], false, false );
            
		}
    }