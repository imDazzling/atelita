<div class="m-5 row ">					

<?php

    include_once( PATH_HELPERS . '/HTML_helper.php');

    include_once( PATH_DAOS . '/librosDAO.php');

    $libros = buscarLibros();

	if ($libros){
		foreach ($libros as $libro) {
		crearHTMLCardLibro($libro['nombre_libros'], $libro['portada_libros'], $libro['descripcion_libros'] . "...", $libro['id_autores'], "$ " . $libro['id_generos'], $libro['id_estado'], $libro['id_libros'], false);			   			
		}
    }	

?>
</div>