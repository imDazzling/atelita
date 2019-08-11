<?php

    include_once PATH_HELPERS . '/database_helper.php';

    function buscarTodosLosCapitulos(){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM capitulos " .
                    "ORDER BY id_libro";

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

	function buscarCapitulos($libro){

        $conexion = getConexion();

        $consulta = "SELECT id_capitulos, numero_capitulos, nombre_capitulos, descripcion_capitulos, contenido_capitulos " . 
                  "FROM capitulos WHERE id_libro = " . $libro["id"];

        $resultado = $conexion->query( $consulta );

        return $resultado;


	}

    function buscarCapitulo( $id_capitulos ){
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                  "FROM capitulos " . 
                  "WHERE id_capitulos = " . $id_capitulos;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function eliminarCapitulo( $capitulo ){

        $conexion = getConexion();

        $sql = "DELETE FROM capitulos " .         
               " WHERE id_capitulos = " . $capitulo["id"];

        $resultado = $conexion->query( $sql );

    }

    function agregarCapitulo( $capitulo ){

        $conexion = getConexion();

        $sql = "INSERT INTO capitulos " . 
                    "(id_libro, numero_capitulos, nombre_capitulos, descripcion_capitulos, contenido_capitulos)" 
                        . " VALUES (" 
                        . $capitulo["id_libro"] . ", '"
                        . $capitulo["numero"] . "', '"
                        . $capitulo["nombre"] . "', '"
                        . $capitulo["descripcion"] . "', "
                        . $capitulo["contenido"] . ")";

        $conexion->query( $sql );

    }

    function modificarCapitulo( $capitulo ){

        $conexion = getConexion();

        $sql = "UPDATE capitulos SET " . 
                    "id_libro= " . $capitulo["id_libro"] .
                    ", numero_capitulos= \"" . $capitulo["numero"] . "\"" .
                    ", nombre_capitulos=\"" . $capitulo["nombre"] . "\"". 
                    ", descripcion_capitulos=" . $capitulo["descripcion"] . "\"";

        if ( $capitulo["contenido"] ){
            $sql .= ", contenido_capitulos=\"" . $capitulo["contenido"] . "\"";
        }
        
        $sql .= " WHERE id_capitulos = " . $capitulo["id"];

        $conexion->query( $sql );

    }
?>