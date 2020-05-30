<?php

	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	
	//RECIBIR DATOS DEL FORMULARIO
	$hacienda=htmlspecialchars($_POST["h"]);
	$cultivo=htmlspecialchars($_POST["c"]);
	$riego=htmlspecialchars($_POST["r"]);
	$fertilizante=htmlspecialchars($_POST["f"]);
	$ddt=htmlspecialchars($_POST["d"]);
	$semaforo=htmlspecialchars($_POST["t"]);
	$description=htmlspecialchars($_POST["n"]);
	$asdate=$_POST["ad"];
	

	//echo $nombre, $tipo;

	require_once("include/tratamientoDAO.php");

	$objetoVO = new tratamientoVO();
	$objetoDAO = new tratamientoDAO();

	$objetoVO->setAll(0, $hacienda, $cultivo, $riego, $fertilizante, $ddt, $semaforo, $description, 0, $asdate, 0);
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
		//header('Location: new_tratamiento.php');
		//echo $asdate;
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}
	//echo "TRATAMIENTO";

?>