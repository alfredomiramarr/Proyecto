<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$name=htmlspecialchars($_POST["n"]);
	$desc=htmlspecialchars($_POST["d"]);
	$imgname=$_FILES["i"]["name"];
	$imgarchivo=$_FILES["i"]["tmp_name"];
	$imgruta="images";
	$imgruta=$imgruta."/".$imgname;

	move_uploaded_file($imgarchivo, $imgruta);


	//echo $id, $zona;

	require_once("include/sprayDAO.php");

	$objetoVO = new sprayVO();
	$objetoDAO = new sprayDAO();

	$objetoVO->setAll(0, $name, $desc, $imgruta, 0);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		//echo "LISTO"
		//header('Location: cat_spray.php');
		echo '<script>
	      alert("Registro exitoso");
		  window.location = "cat_spray.php";
		  </script>';
	} else {
		//echo "Registro No inserado";
		//header('Location: new_spray.php');
		echo '<script>
			      alert("Registro no exitoso.");
				  window.history.go(-1);
				  </script>';
	}

?>