<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$nombre=htmlspecialchars($_POST["n"]);
	$location=htmlspecialchars($_POST["l"]);
	$tipo=htmlspecialchars($_POST["t"]);
	$cantidad=htmlspecialchars($_POST["q"]);

	//echo $nombre, $location, $tipo, $cantidad;

	require_once("include/cultivosDAO.php");

	$objetoVO = new cultivosVO();
	$objetoDAO = new cultivosDAO();

	$objetoVO->setAll(0, 0, $nombre, $location, $tipo, $cantidad);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_cultivos.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_cultivo.php');
	}


?>