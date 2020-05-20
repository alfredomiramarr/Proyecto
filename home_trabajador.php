<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	session_start();

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="center" background="FFFBB5">
	<a href="/NewProyect"> CHIQUITA BANANA  </a>
	<img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52">
	<a href="logout.php" align="right">LOGOUT</a>
	
	</header>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icon-banana.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/font-awesome.min.css">
<!--NO===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style/css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/select2.min.css">
<!--===============================================================================================--NO-->	
	<link rel="stylesheet" type="text/css" href="style/css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/css/util.css">
	<link rel="stylesheet" type="text/css" href="style/css/main.css">
	<link rel="stylesheet" href="style/css/menu-bar.css">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	<?php if(!empty($user)):
		//echo "BIENVENIDO";

	 ?>
	
	
	<?php endif; ?>


	<div class="topnav">
	  <a class="active" href="#home">Inicio</a>
	  <a href="cat_cultivos.php">Catálogos</a>
	  <a href="new_cultivo.php">Nuevo Registro</a>
	  

	  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
	</div>
	</div>
	<style>
			/* Add a black background color to the top navigation */
	.menu {
		background-color: #FFD74F;
		shape-margin: 10px;
	  	overflow: hidden;
	  	margin: 5;
	  	display: block;
		text-align: center;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}

	/* Style the links inside the navigation bar */
	.menu a {
	  float: center;
	  color: #000000;
	  text-align: center;
	  padding: 20px 20px;
	  text-decoration: none;
	  font-size: 15px;
	  text-align: center;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}

	/* Change the color of links on hover */
	.menu a:hover {
	  background-color: #FFFBB5;
	  color: black;
	  opacity: 0.7;
	}

	/* Add a color to the active/current link */
	.menu a.active {
	  background-color: #E7AAFA;
	  color: white;
	}
	.menu img{
			width: 60px;
			height: 60px;
		}
	</style>
	<div class="menu">
	  <a class="active" href="#home">PLANTACIONES</a>
	  <a href="new_cosecha.php">COSECHAS</a>
	  <a href="new_riego.php">RIESGOS</a>
	  <a href="new_tratamiento.php">TRATAMIENTOS</a>

	</div>
		
		<div class="container-login100" style="background-image: url('images/banana-back.jpg');">
		<style>
				.tabla10 {
				  width: 500px;
				  background: #fff;
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 20px;
				  left:140px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				}
				.tabla20{
					width: 500px;
				  background: #fff;
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 20px;
				  left:660px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.tabla30{
					width: 500px;
				  background: #fff;
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 400px;
				  left:140px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.tabla40{
					width: 500px;
				  background: #fff;
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 400px;
				  left:660px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.imagn:hover{
					border-radius:50%;
					-webkit-border-radius:50%;
					box-shadow: 0px 0px 15px 15px #00FEB5;
					-webkit-box-shadow: 0px 0px 15px 15px #00FEB5;
					transform: rotate(360deg);
					-webkit-transform: rotate(360deg);
					}
			</style>
		<div class="tabla10 p-l-50 p-r-50 p-t-30 p-b-30">
			
				<div class="login100-form-logo" align="center">
					<h3>Registrar PLantación</h3>
				</div>

				<img class="imagn" src="images/Plantacion.jpg" alt="images/Plantacion.jpg" style="width:100%" align="center">
		</div>
		<br>
		<div class="tabla20 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
					<h3>Registrar Cosecha</h3>
			</div>
				<img href="new_cosecha.php" class="imagn" src="images/Cosecha.jpg" alt="images/Cosecha.jpg" style="width:100%" align="center">
				
		</div>
		<br>
		<div class="tabla30 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
					<h3>Registrar riego</h3>
			</div>	
				<img class="imagn" src="images/Riego.png" alt="images/Riego.jpg" style="width:100%" align="center">
		</div>
		<br>
		<div class="tabla40 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
					<h3>Registrar tratamiento</h3>
			</div>	
			<img class="imagn" src="images/Tratamiento.jpg" alt="images/Plantacion.jpg" style="width:100%" align="center">
			
		</div>

	</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>