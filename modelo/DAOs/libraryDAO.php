<?php

    include_once PATH_HELPERS . '/database_helper.php';

    function buscarLibreria($id_usuario){

        $conexion = getConexion();

        $consulta = "SELECT id_libros " . 
                    "FROM libreria " .
                    "WHERE id_usuarios=" . $id_usuario;

        $resultado = $conexion->query( $consulta );

        $array_libreria = array();
        
        while($libreria = $resultado->fetch_assoc())
        {
            $array_libreria[] = $libreria["id_libros"];
        }

        return $array_libreria;
    }

    function agregarLibreria( $id_libro, $id_usuario){

        $conexion = getConexion();

        $consulta = "INSERT INTO libreria " . 
                    "(id_libros, id_usuarios) " .
                    "VALUES (" . $id_libro . ", " . $id_usuario . ")";


        $resultado = $conexion->query( $consulta );

    }

    function eliminarLibreria( $id_libro, $id_usuario){

        $conexion = getConexion();

        $consulta = "DELETE FROM libreria " . 
                    "WHERE id_libros=" . $id_libro . " AND  id_usuarios=" . $id_usuario;


        $resultado = $conexion->query( $consulta );

    }

    function contarLibreria( $orden ){
        $conexion = getConexion();

        $consulta = "SELECT COUNT FROM libreria";
                    "WHERE id_libros=" . $id_libro;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }
