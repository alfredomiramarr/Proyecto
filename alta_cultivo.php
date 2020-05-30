<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$nombre=htmlspecialchars($_POST["n"]);
	$tipo=htmlspecialchars($_POST["t"]);
	$cantidad=htmlspecialchars($_POST["q"]);
	$imgname=$_FILES['img']['name'];
	$imgarchivo=$_FILES['img']['tmp_name'];
	$imgruta="images";
	$imgruta=$imgruta."/".$imgname;

	move_uploaded_file($imgarchivo, $imgruta);

	//echo $nombre, $location, $tipo, $cantidad;

	require_once("include/cultivosDAO.php");

	$objetoVO = new cultivosVO();
	$objetoDAO = new cultivosDAO();

	$objetoVO->setAll(0, $nombre, $tipo, $cantidad, $imgruta, 0);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		//header('Location: cat_cultivos.php');
		echo '<script>
	      alert("Registro exitoso");
		  window.location = "cat_cultivos.php";
		  </script>';
	} else {
		//echo "Registro No inserado";
		//header('Location: new_cultivo.php');
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}


?>