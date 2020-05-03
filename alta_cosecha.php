<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	//$id=htmlspecialchars($_POST["i"]);
	$date=htmlspecialchars($_POST["d"]);

	//echo $id, $nombre, $descripcion;

	require_once("include/cosechasDAO.php");

	$objetoVO = new cosechasVO();
	$objetoDAO = new cosechasDAO();

	$objetoVO->setAll(0, $date);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_cosechas.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_cosecha.php');
	}

?>