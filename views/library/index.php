<?php 

	$daoGenero = PATH_DAOS . "/generosDAO.php";
	include($daoGenero);

	$daoLibros = PATH_DAOS . "/librosDAO.php";
	include($daoLibros);

	$daoLib = PATH_DAOS . "/libraryDAO.php";
	include($daoLib);

	$daoEst = PATH_DAOS . "/estadoDAO.php";
	include($daoEst);

	$helper = PATH_HELPERS . "/HTML_helpers.php";
	include($helper);

	$content= PATH_VIEWS . "/library/partials/library.inc.php";
	include( PATH_VIEWS . '/common/base.php' );

?>