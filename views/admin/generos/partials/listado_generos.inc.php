<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/generosDAO.php';

    $genero = buscarGenero();

    $campos = [ "id" => "ID", "nombre" => "Nombre", "descripcion" => "Descripcion" ];

	echo getTablaHTML($genero, $campos, "id", "generos");