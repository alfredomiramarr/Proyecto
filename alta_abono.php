<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	//$id=htmlspecialchars($_POST["i"]);
	$nombre=htmlspecialchars($_POST["n"]);
	$descrip=htmlspecialchars($_POST["des"]);
	//$i=htmlspecialchars($_POST["img"]);
	$imgname=$_FILES['img']['name'];
	$imgarchivo=$_FILES['img']['tmp_name'];
	$imgruta="images";
	$imgruta=$imgruta."/".$imgname;

	move_uploaded_file($imgarchivo, $imgruta);

	//echo $id, $nombre, $descripcion;

	require_once("include/abonosDAO.php");

	$objetoVO = new abonosVO();
	$objetoDAO = new abonosDAO();

	$objetoVO->setAll(0, $nombre, $descrip, $imgruta, 0);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO";
		//echo $i;
		//echo $imgruta;
		
		//header('Location: cat_abonos.php');
		echo '<script>
	      alert("Registro exitoso");
		  window.location = "cat_abonos.php";
		  </script>';
	} else {
		//echo "Registro No inserado";
		//header('Location: new_abono.php');
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}

?>