<?php 

	session_start();

	include('config/config.php');

	error_reporting(0);
	$content= PATH_PARTIALS . "/library.inc.php";
	$contentjs= PATH_PARTIALS . "/library.js.php";
	include('base.php');

?>