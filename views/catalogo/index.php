<?php 

	$daoGenero = PATH_DAOS . "/generosDAO.php";
	include($daoGenero);

	$daoLibros = PATH_DAOS . "/librosDAO.php";
	include($daoLibros);

	$daoUsuarios = PATH_DAOS . "/usuariosDAO.php";
	include($daoUsuarios);

	$helper = PATH_HELPERS . "/HTML_helpers.php";
	include($helper);

	$content= PATH_VIEWS . "/catalogo/partials/catalogo.inc.php";
	include( PATH_VIEWS . '/common/base.php' );

