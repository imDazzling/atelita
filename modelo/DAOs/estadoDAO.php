<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarEstado(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM estado " .
                    "ORDER BY nombre";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarEstado( $estado ){

        $conexion = getConexion();

        $sql = "INSERT INTO estado " . 
                    "(nombre)" 
                        . " VALUES ('" 
                        . $estado["descripcion"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarEstado( $estado ){

        $conexion = getConexion();

        $sql = "UPDATE estado " . 
                "SET nombre = '" . $estado["descripcion"] .
                "' WHERE id = " . $estado["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarEstado( $estado ){

        $conexion = getConexion();

        $sql = "DELETE FROM estado " . 
                " WHERE id = " . $estado["id"]; 
                       
        $conexion->query( $sql );

    }