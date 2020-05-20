<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require "conexion.php";

	//mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="center" background="FFFBB5">
	<a href="home.php"> CHIQUITA BANANA  </a>
	<img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52">
	<a href="logout.php" align="right">SALIR</a>
	
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
<!--===============================================================================================-->
</head>
<body>
<div class="topnav">
  <a href="home.php">Inicio</a>
  <a href="cat_cultivos.php">Catálogos</a>
  <a class="active" href="#">Nuevo Registro</a>

  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
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
	  <a href="new_cultivo.php">CULTIVO</a>
	  <a href="new_abono.php">FERTILIZANTE</a>
	  <a class="active" href="#">DDT</a>
	  <a href="new_plaga.php">PLAGA</a>
	  <a href="new_riego.php">RIEGO</a>

	</div>
	
	<div class="container-login100" style="background-image: url('images/banana-crop.jpg');">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
			<form class="login100-form validate-form" method="post" action="alta_abono.php">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					Nuevo Insecticida
				</span>

				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="text" name="n" placeholder="Nombre del insecticida" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input10 validate-input m-b-20" >
					<input class="input100" type="text" name="d" placeholder="Descripción" required="required">
					<span class="focus-input100"></span>
				</div>		
				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="file" name="img" placeholder="Imagen">
					<span class="focus-input100"></span>
				</div>		
				
				
				<div class="container-login100-form-btn">
					<button type="submit"  name="sub_button" class="login100-form-btn">
						Registrar
					</button>
				</div>
			</form>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

</body>
</html>