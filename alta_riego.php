<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	//$id=htmlspecialchars($_POST["i"]);
	$frecuencia=htmlspecialchars($_POST["f"]);
	$quant=htmlspecialchars($_POST["q"]);
	$desc=htmlspecialchars($_POST["d"]);
	$imgname=$_FILES['img']['name'];
	$imgarchivo=$_FILES['img']['tmp_name'];
	$imgruta="images";
	$imgruta=$imgruta."/".$imgname;

	move_uploaded_file($imgarchivo, $imgruta);


	//echo $id, $frecuencia, $quant;

	require_once("include/riegoDAO.php");

	$objetoVO = new riegoVO();
	$objetoDAO = new riegoDAO();

	$objetoVO->setAll(0, $frecuencia, $quant, $desc, $imgruta);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_riego.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_riego.php');
	}

?>