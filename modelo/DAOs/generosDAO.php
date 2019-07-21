<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarGenero(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM generos " .
                    "ORDER BY nombre";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarGenero( $genero ){

        $conexion = getConexion();

        $sql = "INSERT INTO generos " . 
                    "(nombre)" 
                        . " VALUES ('" 
                        . $genero["nombre"]
                     . $genero["descripcion"] . "')";

        $conexion->query( $sql );

    }

    function modificarGenero( $genero ){

        $conexion = getConexion();

        $sql = "UPDATE generos " . 
                "SET nombre = '" . $genero["nombre"] .
                "SET descripcion = '" . $genero["descripcion"] .
                "' WHERE id = " . $genero["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarGenero( $genero ){

        $conexion = getConexion();

        $sql = "DELETE FROM generos " . 
                " WHERE id = " . $genero["id"]; 
                       
        $conexion->query( $sql );

    }