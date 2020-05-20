<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$name=htmlspecialchars($_POST["n"]);
	$desc=htmlspecialchars($_POST["d"]);
	$imgname=$_FILES['img']['name'];
	$imgarchivo=$_FILES['img']['tmp_name'];
	$imgruta="images";
	$imgruta=$imgruta."/".$imgname;

	move_uploaded_file($imgarchivo, $imgruta);


	//echo $id, $zona;

	require_once("include/sprayDAO.php");

	$objetoVO = new sprayVO();
	$objetoDAO = new sprayDAO();

	$objetoVO->setAll(0, $name, $desc, $imgruta);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_spray.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_spray.php');
	}

?>