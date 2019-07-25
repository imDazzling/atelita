<?php

    include_once PATH_HELPERS . '/html_helpers.php';

    include_once PATH_DAOS . '/estadoDAO.php';

    $estado = buscarEstado();

    $campos = [ "id_estado" => "ID", "nombre_estado" => "Nombre" ];

	echo getTablaHTML($estado, $campos, "id_estado", "estados");