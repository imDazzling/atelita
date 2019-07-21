<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarAutor(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM autores " .
                    "ORDER BY nombre";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarAutor( $autor ){

        $conexion = getConexion();

        $sql = "INSERT INTO autores " . 
                    "(nombre)" 
                        . " VALUES ('" 
                        . $autor["descripcion"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarAutor( $autor ){

        $conexion = getConexion();

        $sql = "UPDATE autores " . 
                "SET nombre = '" . $autor["descripcion"] .
                "' WHERE id = " . $autor["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarAutor( $autor ){

        $conexion = getConexion();

        $sql = "DELETE FROM autores " . 
                " WHERE id = " . $autor["id"]; 
                       
        $conexion->query( $sql );

    }