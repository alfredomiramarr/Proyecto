<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$hacienda=$_POST('hacienda');
	if(empty($hacienda)){
		header("location: home_trabajador.php");
	}


?>