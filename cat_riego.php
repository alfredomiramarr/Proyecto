<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="center" background="FFFBB5">
	<a href="alfredo/NewProyect/home.php"> CHIQUITA BANANA  </a>
	<img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52">
	<a href="logout.php">SALIR</a>
	
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

	<?php if(!empty($user)):
	//echo "WELCOME'".$row['Admin_name']."' '".$row['Admin_Last_Name'];?
	?>
	<?php endif; ?>


	<div class="topnav">
	  <a href="home.php">Inicio</a>
	  <a href="new_cultivo.php">Nuevo Registro</a>
	  <a class="active"href="#contact">Catálogos</a>

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
	  <a href="cat_zonas.php">ZONAS</a>
	  <a href="cat_cultivos.php">CULTIVOS</a>
	  <a class="active" href="cat_riego.php">RIEGO</a>
	  <a href="cat_abonos.php">ABONO</a>
	  <a href="cat_plagas.php">PLAGAS</a>
	  <a href="cat_tratamientos.php">TRATAMIENTOS</a>
	</div>
		
		<div class="container-login100" style="background-image: url('images/banana-back.jpg');">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<h1>Riego</h1>
</head>
			<table>
					<tr>
					<th>FRECUENCIA</th>
					<th>CANTIDAD</th>
					
					</tr>

					<?php
					//include("include/conexion.php");
					$sql = "SELECT * FROM T_Irrigation;";
					$result = mysqli_query($conexion,$sql);

					if($result) {

					while ($row =mysqli_fetch_assoc($result)){

					echo "<tr>";
					echo "<td> ". $row ["Frecuency"]. "</td>";
					echo "<td> ". $row ["Quantity"]. "</td>";
					
					echo "</tr>";
					}
					foreach($result as $row){

					}

					} else {
					echo "Error";
					}
					?>

		</table>
		</div>
					</div>
				</form>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>