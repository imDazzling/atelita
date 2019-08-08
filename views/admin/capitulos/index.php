<?php

include_once('../config/config.php');

include_once( PATH_DAOS . '/librosDAO.php');

include_once( PATH_DAOS . '/capitulosDAO.php');

include_once( PATH_HELPERS . '/HTML_helpers.php');

$content = PATH_VIEWS . "/admin/capitulos/partials/contenido_capitulos.inc.php";

include( PATH_VIEWS . '/admin/common/base.php' );