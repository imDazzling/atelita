<?php

    include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/generosDAO.php';

    $genero = buscarGenero();

    $campos = [ "id_generos" => "ID", "nombre_generos" => "Nombre", "descripcion_generos" => "Descripcion" ];

	echo getTablaHTML($genero, $campos, "id_generos", "nombre_generos", "descripcion_generos");
