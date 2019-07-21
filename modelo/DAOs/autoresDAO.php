<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarAutor(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM autores " .
                    "ORDER BY nombre_autores";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarAutor( $autor ){

        $conexion = getConexion();

        $sql = "INSERT INTO autores " . 
                    "(nombre_autores)" 
                        . " VALUES ('" 
                        . $autor["nombre"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarAutor( $autor ){

        $conexion = getConexion();

        $sql = "UPDATE autores " . 
                "SET nombre_autores = '" . $autor["nombre"] .
                "' WHERE id_autores = " . $autor["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarAutor( $autor ){

        $conexion = getConexion();

        $sql = "DELETE FROM autores " . 
                " WHERE id_autores = " . $autor["id"]; 
                       
        $conexion->query( $sql );

    }