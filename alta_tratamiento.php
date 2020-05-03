<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$nombre=htmlspecialchars($_POST["n"]);
	$tipo=htmlspecialchars($_POST["t"]);

	//echo $nombre, $tipo;

	require_once("include/tratamientoDAO.php");

	$objetoVO = new tratamientoVO();
	$objetoDAO = new tratamientoDAO();

	$objetoVO->setAll(0, 0, 0, 0, 0, $nombre, $tipo);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_tratamientos.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_tratamiento.php');
	}

?>