<?php

    include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/autoresDAO.php';

    $autor = buscarAutor();

    $campos = [ "id" => "ID", "nombre" => "Nombre" ];

	echo getTablaHTML($autor, $campos, "id", "estado");