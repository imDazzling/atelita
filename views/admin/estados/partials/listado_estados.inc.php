<?php

    include_once PATH_HELPERS . '/html_helper.php';

    include_once PATH_DAOS . '/estadoDAO.php';

    $estado = buscarEstado();

    $campos = [ "id" => "ID", "nombre" => "Nombre" ];

	echo getTablaHTML($estado, $campos, "id", "estado");