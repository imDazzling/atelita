<?php 

	session_start();

	include('config/config.php');

	error_reporting(0);
	$content= PATH_PARTIALS . "/index.inc.php";
	$contentjs= PATH_PARTIALS . "/index.js.php";
	include('base.php');

?>