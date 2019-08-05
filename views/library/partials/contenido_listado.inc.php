<?php

$busqueda = "";

    if ( isset($_GET["buscar"]) ){
    	$busqueda = $_GET["buscar"];
    }

    $id_generos = -1;

    if ( isset($_GET["generos"]) ){
    	$id_generos = $_GET["generos"];
    }
/*
    $orden = "pub_precio ASC";

    if ( isset($_GET["orden"]) ){
    	if ( $_GET["orden"] == 1){
    		$orden = "pub_precio DESC";
    	};
    }

    $precio_desde = null;
    if ( isset($_GET["precio_desde"]) ){
    	$precio_desde = $_GET["precio_desde"];
    }

    $precio_hasta = null;
    if ( isset($_GET["precio_hasta"]) ){
    	$precio_hasta = $_GET["precio_hasta"];

    	if (!$precio_desde){
    		$precio_desde = 0;
    	}

    }

    */




    if ( isset( $_GET["on_library"]) )
	{
		$libros = buscarLibreria( $_SESSION["id_usuario"] );
	}
	else{

        $estados = -1;

        if ( isset( $_GET["estados"]) ){
            $estados = $_GET["estados"];
        }

		$libros = buscarLibros( $busqueda, $id_generos,  $estados );


	}
    

    $library=[];

    if ( isset( $_SESSION["id_usuario"] ) ) {
    	$library = buscarLibreria($_SESSION["id_usuario"]);
    }

    

	if ($libros){
		foreach ($libros as $libro) {

			$on_library = in_array( $libro['id_libros'], $library);

			crearHTMLCardLibro($libro['nombre_libros'], $libro['portada_libros'], $libro['descripcion_libros'], $libro['id_generos'], $libro['id_libros'], $libro['id_estado'], '...' ,  true, false );
		}
    }