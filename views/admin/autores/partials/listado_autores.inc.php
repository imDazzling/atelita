<?php

    include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/autoresDAO.php';

    $autor = buscarAutor();

    $campos = [ "id_autores" => "ID", "nombre_autores" => "Nombre" ];

	echo getTablaHTML($autor, $campos, "id_autores", "nombre_autores");