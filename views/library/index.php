<?php 

	$daoGenero = PATH_DAOS . "/generosDAO.php";
	include($daoGenero);

	$daoLibros = PATH_DAOS . "/librosDAO.php";
	include($daoLibros);

	$daoUsuarios = PATH_DAOS . "/libraryDAO.php";
	include($daoUsuarios);

	$helper = PATH_HELPERS . "/HTML_helpers.php";
	include($helper);

	$content= PATH_VIEWS . "/library/partials/library.inc.php";
	include( PATH_VIEWS . '/common/base.php' );

?>