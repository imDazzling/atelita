<?php

    include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/estadoDAO.php';

    $estado = buscarEstado();

    $campos = [ "id" => "ID", "nombre" => "Nombre" ];

	echo getTablaHTML($estado, $campos, "id", "estado");