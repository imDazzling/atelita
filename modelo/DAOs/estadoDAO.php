<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarEstado(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM estado " .
                    "ORDER BY nombre_estado";

        $resultado = $conexion->query( $consulta );

        return $resultado;
	}

    function agregarEstado( $estado ){

        $conexion = getConexion();

        $sql = "INSERT INTO estado " . 
                    "(nombre_estado)" 
                        . " VALUES ('" 
                        . $estado["nombre"]
                     . "')";

        $conexion->query( $sql );

    }

    function modificarEstado( $estado ){

        $conexion = getConexion();

        $sql = "UPDATE estado " . 
                "SET nombre_estado = '" . $estado["nombre"] .
                "' WHERE id_estado = " . $estado["id"]; 
                       
        $conexion->query( $sql );

    }


    function eliminarEstado( $estado ){

        $conexion = getConexion();

        $sql = "DELETE FROM estado " . 
                " WHERE id_estado = " . $estado["id"]; 
                       
        $conexion->query( $sql );

    }