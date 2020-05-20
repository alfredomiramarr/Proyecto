<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$cultivo=htmlspecialchars($_POST["c"]);
	$plaga=htmlspecialchars($_POST["p"]);
	$spray=htmlspecialchars($_POST["s"]);
	$description=htmlspecialchars($_POST["d"]);
	$tl=htmlspecialchars($_POST["tl"]);

	//echo $id, $zona;

	require_once("include/issueDAO.php");

	$objetoVO = new issueVO();
	$objetoDAO = new issueDAO();

	$objetoVO->setAll(0, $cultivo, $plaga, $spray, $description, 0, $tl);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		header('Location: cat_issue.php');
	} else {
		//echo "Registro No inserado";
		header('Location: new_issue.php');
	}

?>