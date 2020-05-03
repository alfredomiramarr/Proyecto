<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	//$id=htmlspecialchars($_POST["i"]);
	$nombre=htmlspecialchars($_POST["n"]);
	$descripcion=htmlspecialchars($_POST["d"]);

	//echo $id, $nombre, $descripcion;

	require_once("include/plagasDAO.php");

	$objetoVO = new plagasVO();
	$objetoDAO = new plagasDAO();

	$objetoVO->setAll(0, $nombre, $descripcion);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_plagas.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_plaga.php');
	}

?>