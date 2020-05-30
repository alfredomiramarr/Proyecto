<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$zona=htmlspecialchars($_POST["z"]);
	$nombre=htmlspecialchars($_POST["n"]);
	$location=htmlspecialchars($_POST["l"]);

	//echo $nombre, $location, $tipo, $cantidad;

	require_once("include/haciendaDAO.php");

	$objetoVO = new haciendaVO();
	$objetoDAO = new haciendaDAO();

	$objetoVO->setAll(0, $zona, $nombre, $location, 0, 0);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		/*echo $zona. "<br>";
		echo $nombre. "<br>";
		echo $location. "<br>";
		echo "LISTO";*/
		//header('Location: cat_hacienda.php');
		echo '<script>
	      alert("Registro exitoso");
		  window.location = "cat_hacienda.php";
		  </script>';
	} else {
		/*echo $zona. "<br>";
		echo $nombre. "<br>";
		echo $location. "<br>";
		echo "Registro No inserado";
		//header('Location: new_cultivo.php');*/
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}


?>