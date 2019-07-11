<?php 

	session_start();

	include('config/config.php');

	error_reporting(0);
	$content= PATH_PARTIALS . "/catalogo.inc.php";
	$contentjs= PATH_PARTIALS . "/catalogo.js.php";
	include('base.php');

?>