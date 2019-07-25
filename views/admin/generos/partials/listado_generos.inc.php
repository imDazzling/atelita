<?php

    include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/generosDAO.php';

    $genero = buscarGenero();

    $campos = [ "id_generos" => "ID", "nombre_generos" => "Nombre" ];

	echo getTablaHTML($genero, $campos, "id_generos", "generos");
