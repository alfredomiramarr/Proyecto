<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	//$id=htmlspecialchars($_POST["i"]);
	$nombre=htmlspecialchars($_POST["n"]);
	$descripcion=htmlspecialchars($_POST["d"]);
	$imgname=$_FILES['img']['name'];
	$imgarchivo=$_FILES['img']['tmp_name'];
	$imgruta="images";
	$imgruta=$imgruta."/".$imgname;

	move_uploaded_file($imgarchivo, $imgruta);

	//echo $id, $nombre, $descripcion;

	require_once("include/plagasDAO.php");

	$objetoVO = new plagasVO();
	$objetoDAO = new plagasDAO();

	$objetoVO->setAll(0, $nombre, $descripcion, $imgruta);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_plagas.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_plaga.php');
	}

?>