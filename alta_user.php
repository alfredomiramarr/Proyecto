<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	

	//RECIBIR DATOS DEL FORMULARIO
	$nombre=htmlspecialchars($_POST["n"]);
	$apellido=htmlspecialchars($_POST["ap"]);
	//$tipo=htmlspecialchars($_POST["tu"]);
	$email=htmlspecialchars($_POST["em"]);
	$pass=htmlspecialchars($_POST["pass"]);
	$passconfirm=htmlspecialchars($_POST["confpass"]);
	$date=date("Y/M/D");

	if(isset($_POST["sub_button"])){
		$selected_val = ($_POST["tu"]);  // Storing Selected Value In Variable
		//echo "You have selected :" .$selected_val;  // Displaying Selected Value
	}

	//echo $nombre;
	//echo $apellido;
	//echo $tipo;
	//echo $email;
	//echo $pass;
	//echo $passconfirm;
	//echo $date;

	if($pass != $passconfirm){
		echo "Las contraseñas indicadas no coinciden";
	}

	if($email){

	require_once("conexion.php");
	$sqlemail="SELECT Email FROM T_User WHERE Email='".$email."'";
	$result=mysqli_query($conexion, $sqlemail);
	$user=mysqli_fetch_assoc($result);

		if($user["Email"]==$email){
			echo("El correo ya existe");
			header('Location: new_user.php');

		}

	}


	$varSalt = uniqid();
	//echo $varSalt;

	$passSeguro = hash("sha256", $pass.$varSalt);

	//echo $nombre, $location, $tipo, $cantidad;

	require_once("include/userDAO.php");

	$objetoVO = new userVO();
	$objetoDAO = new userDAO();

	$objetoVO->setAll(0, $selected_val, $nombre, $apellido, $email, 0, $passSeguro, $varSalt, $date);
	$bandera=$objetoDAO->Insert($objetoVO);

	if($bandera) {
		echo "LISTO";
		header('Location: index.php');
	} else {
		echo "Registro No inserado";
		header('Location: new_user.php');
	}


?>
