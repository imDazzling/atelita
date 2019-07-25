<?php 

	$daoGenero = PATH_DAOS . "/generosDAO.php";
	include($daoGenero);

	$daoAutor = PATH_DAOS . "/autoresDAO.php";
	include($daoAutor);

	$daoLibros = PATH_DAOS . "/librosDAO.php";
	include($daoLibros);

	$daoLib = PATH_DAOS . "/libraryDAO.php";
	include($daoLib);

	$daoEst = PATH_DAOS . "/estadoDAO.php";
	include($daoEst);

	$helper = PATH_HELPERS . "/HTML_helpers.php";
	include($helper);

	$content= PATH_VIEWS . "/catalogo/partials/catalogo.inc.php";
	$contentjs= PATH_VIEWS . "/catalogo/partials/catalogo.js.php";
	$contenido_listado= PATH_VIEWS . "/catalogo/partials/contenido_listado.inc.php";
	include( PATH_VIEWS . '/common/base.php' );

    