<?php 

	session_start();

	include('config/config.php');

	error_reporting(0);
	$content= PATH_PARTIALS . "/reader.inc.php";
	$contentjs= PATH_PARTIALS . "/reader.js.php";
	include('base.php');

?>