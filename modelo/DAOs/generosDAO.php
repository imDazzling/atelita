<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarGenero(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM generos " .
                    "ORDER BY nombre_generos";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarGenero( $genero ){

        $conexion = getConexion();

        $sql = "INSERT INTO generos " . 
                    "(nombre_generos)" 
                        . " VALUES ('" 
                        . $genero["nombre"] . "')";

        $conexion->query( $sql );

    }

    function modificarGenero( $genero ){

        $conexion = getConexion();

        $sql = "UPDATE generos " . 
                "SET nombre_generos = '" . $genero["nombre"] .
                "' WHERE id_generos = " . $genero["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarGenero( $genero ){

        $conexion = getConexion();

        $sql = "DELETE FROM generos " . 
                " WHERE id_generos = " . $genero["id"]; 
                       
        $conexion->query( $sql );

    }