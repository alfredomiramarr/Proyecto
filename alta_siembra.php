<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$hacienda=htmlspecialchars($_POST["h"]);
	$cultivo=htmlspecialchars($_POST["c"]);
	$quant=htmlspecialchars($_POST["q"]);
	
	//$date=htmlspecialchars($_POST["d"]);


	//echo $id, $nombre, $descripcion;

	require_once("include/siembraDAO.php");

	$objetoVO = new siembraVO();
	$objetoDAO = new siembraDAO();

	$objetoVO->setAll(0, $hacienda, $cultivo, $quant, 0, 0);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO";
		//header('Location: home_trabajador.php');
		echo '<script>
	      alert("Registro exitoso");
		  window.location = "home_trabajador.php";
		  </script>';
	} else {
		//echo "Registro No inserado";
		//header('Location: new_siembra.php');
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}

?>