<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	
	

	//RECIBIR DATOS DEL FORMULARIO
	$hacienda=htmlspecialchars($_POST["h"]);
	$cultivo=htmlspecialchars($_POST["c"]);
	$plaga=htmlspecialchars($_POST["p"]);
	$spray=htmlspecialchars($_POST["s"]);
	$description=htmlspecialchars($_POST["d"]);
	$tl=htmlspecialchars($_POST["tl"]);
	
	
	require_once("include/issueDAO.php");

	$objetoVO = new issueVO();
	$objetoDAO = new issueDAO();

	$objetoVO->setAll(0, $hacienda, $cultivo, $spray, $plaga, $tl, $description,  0, 0);
	$bandera=$objetoDAO->Insert($objetoVO);
	/*echo $hacienda."<br>";
	echo $cultivo."<br>";
	echo $spray."<br>";
	echo $plaga."<br>";
	echo $tl."<br>";
	echo $description."<br>";*/
	

	if($bandera) {
		//echo "LISTO";
		//print_r($objetoVO);
		//header('Location: home_trabajador.php');
		echo '<script>
	      alert("Registro exitoso");
		  window.location = "home_trabajador.php";
		  </script>';
	} else {
		//echo "Registro No inserado";
		//print_r($objetoVO);
		//header('Location: new_issue.php');
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}
	//echo "VARIABLE ....";

?>