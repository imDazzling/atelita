<?php

    include_once PATH_HELPERS . '/database_helper.php';

	function buscarLibros($busqueda, $id_generos, $estado){

        $conexion = getConexion();

        $consulta = "SELECT id_libros, nombre_libros, SUBSTRING(descripcion_libros, 1, 250) AS descripcion_libros, portada_libros, id_generos, id_estado " . 
                  "FROM libros ";

        if ( $busqueda != "" ){

           $consulta .= " WHERE (nombre_libros LIKE '%" . $busqueda . "%' OR descripcion_libros LIKE '%" . $busqueda . "%')";
        }

        


        /*

        if ( $precio_desde ){

            if ( $busqueda == "" ){
                $consulta .= " WHERE ";
            }else{
                $consulta .= " AND ";
            }

            $consulta .= " pub_precio >= " . $precio_desde;            
        }

        if ( $precio_hasta ){
            $consulta .= " AND pub_precio <= " . $precio_hasta;            
        }
*/

        if ( isset ( $_GET["generos"]) && $_GET["generos"] != -1 )
        {
            if ( $busqueda != "" )
            {
                $consulta .= " AND ";
            }
            else
            {
                $consulta .= " WHERE ";
            }

            $consulta .= " id_generos = " . $id_generos;
        }


        if ( isset ( $_GET["estados"]) && $_GET["estados"] != -1 ){
           
            if ( $busqueda == "" && isset ( $_GET["generos"]) && $_GET["generos"] == -1 )
            {
                $consulta .= " WHERE ";
            }
            else
            {
                $consulta .= " AND ";
            }

            $consulta .= " id_estado = " . $estado;
        }


    /*    $consulta .= " ORDER BY " . $orden; */

        $resultado = $conexion->query( $consulta );


        return $resultado;


	}

    function buscarLibro( $id_libro ){
        $conexion = getConexion();

        $consulta = "SELECT * " . 
                  "FROM libros " . 
                  "WHERE id_libros = " . $id_libro;

        $resultado = $conexion->query( $consulta );

        return $resultado;
    }

    function eliminarLibro( $id_libro ){

        $conexion = getConexion();

        $sql = "DELETE FROM libros " .         
               " WHERE id_libros = " . $id_libro;

        $resultado = $conexion->query( $sql );

    }

    function agregarLibro( $libro ){

        $conexion = getConexion();

        $sql = "INSERT INTO libros " . 
                    "(nombre_libros, descripcion_libros, portada_libros, id_autores, id_generos, id_estado)" 
                        . " VALUES ('" 
                        . $publicacion["nombre"] . "', '"
                        . $publicacion["descripcion"] . "', "
                        . $publicacion["portada"] . ", "
                        . $publicacion["id_autores"] . ", "
                        . $publicacion["id_generos"] . ","
                        . $publicacion["id_estado"] . "'"

                     . ")";

        $conexion->query( $sql );

    }

    function modificarLibro( $libro ){

        $conexion = getConexion();

        $sql = "UPDATE libros SET " . 
                    "nombre_libros= \"" . $libro["nombre"] . "\"" .
                    ", descripcion_libros=\"" . $libro["descripcion"] . "\"". 
                    ", portada_libros=" . $libro["portada"] .
                    ", id_generos=" . $libro["id_generos"] .
                    ", id_autores=" . $libro["id_autores"] .
                    ", id_estado=" . $libro["id_estado"];

        if ( $libro["portada"] ){
            $sql .= ", portada_libros=\"" . $libro["portada"] . "\"";
        }
        
        $sql .= " WHERE id_libros = " . $libro["id"];



        $conexion->query( $sql );



    }
?>