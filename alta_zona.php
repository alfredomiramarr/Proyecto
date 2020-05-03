<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	//$id=htmlspecialchars($_POST["i"]);
	$zona=htmlspecialchars($_POST["z"]);

	//echo $id, $zona;

	require_once("include/zonasDAO.php");

	$objetoVO = new zonasVO();
	$objetoDAO = new zonasDAO();

	$objetoVO->setAll(0, $zona);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_zonas.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_zona.php');
	}

?>