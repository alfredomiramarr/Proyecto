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
	<a href="logout.php">LOGOUT</a>
	
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
	<link rel="stylesheet" type="text/css" href="style/paleBlueRows.css">
<!--===============================================================================================-->
</head>
<body>

	<?php if(!empty($user)):
	//echo "WELCOME'".$row['Admin_name']."' '".$row['Admin_Last_Name'];?>	
	
	<?php endif; ?>


	<div class="topnav">
	  <a href="home.php">Home</a>
	  <a href="new_zona.php">New Crop</a>
	  <a class="active"href="#">Catalogos</a>

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
	  <a href="cat_riego.php">RIEGO</a>
	  <a href="cat_abonos.php">ABONO</a>
	  <a href="cat_plagas.php">PLAGAS</a>
	  <a class="active" href="#">COSECHA</a>
	  <a href="cat_tratamientos.php">TRATAMIENTOS</a>

	</div>		
		<div class="container-login100" style="background-image: url('images/banana-back.jpg');">
			<style>
				.tabla10 {
				  width: 800px;
				  background: #fff;
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				}
			</style>
			<div class="tabla10 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<h1>COSECHA</h1>
</head>
				<style>
					table.paleBlueRows {
					  font-family: SourceSansPro-Regular;
					  border: 3px solid white;
					  width: 500px;
					  height: 200px;
					  text-align: center;
					  border-collapse: collapse;
					}
					table.paleBlueRows td, table.paleBlueRows th {
					  border: 5px solid white;
					  padding: 5px 10px;
					}
					table.paleBlueRows tbody td {
					  font-size: 17px;
					}
					table.paleBlueRows tr:nth-child(even) {
					  background: #D0E4F5;
					}
					table.paleBlueRows thead {
					  background: #3ADEE7;
					  border-bottom: 5px solid white;
					}
					table.paleBlueRows thead th {
					  font-family: SourceSansPro-Regular;
					  font-size: 20px;
					  font-weight: bold;
					  color: #000000;
					  text-align: center;
					  border-left: 2px solid white;
					}
					table.paleBlueRows thead th:first-child {
					  border-left: none;
					}

					table.paleBlueRows tfoot td {
					  font-size: 14px;
					}
				</style>
				<div class="paleBlueRows" align="center">
				<table class="paleBlueRows" align="center">
					<thead>
					<tr>
					<th>ID</th>
					<th>HACIENDA</th>
					<th>CULTIVO COSECHADO</th>
					<th>PIEZAS COSECHADAS</th>
					<th>DIA DE COSECHA</th>		
					</tr>
					</thead>

					<style>
						.btn {
						  display: -webkit-box;
						  display: -webkit-flex;
						  display: -moz-box;
						  display: -ms-flexbox;
						  display: flex;
						  justify-content: center;
						  align-items: center;
						  padding: 0 10px;
						  min-width: 70px;
						  height: 15px;
						  background-color: #3ADEE7;
						  border-radius: 25px;

						  font-family: SourceSansPro-SemiBold;
						  font-size: 10px;
						  color: black;
						  line-height: 1.2;
						  text-transform: uppercase;

						  -webkit-transition: all 0.4s;
						  -o-transition: all 0.4s;
						  -moz-transition: all 0.4s;
						  transition: all 0.4s;

						  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.5);
						}

						.btn:hover {
						  background-color: #4b2354;
						  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
						}
					</style>
					<tbody>
					<?php
					//include("include/conexion.php");
					$sql = "SELECT * FROM T_Harvest;";
					$result = mysqli_query($conexion,$sql);

					if($result) {

					while ($row =mysqli_fetch_assoc($result)){

					echo "<tr>";
					echo "<td> ". $row ["Harvest_ID"]. "</td>";
					echo "<td> ". $row ["Hacienda_ID"]. "</td>";
					echo "<td> ". $row ["Crop_ID"]. "</td>";
					echo "<td> ". $row ["Harv_Quant"]. "</td>";
					echo "<td> ". $row ["Harvest_Date"]. "</td>";

					/*echo "<td> <a href 'editar.php?no=".$row["Harvest_ID"]."'> <button type='submit'  name='editar' class='btn'>Editar</button></a><p>...</p>
					<a href 'modificar.php?no=".$row["Harvest_ID"]."'> <button type='submit' name='eliminar' class='btn'>Eliminar</button></a></div></td>";*/

					
					
					echo "</tr>";
					}
					foreach($result as $row){

					}

					} else {
					echo "Error";
					}
					?>
					</tbody>
				</table>
				</div>
				<div class="text-center p-t-40 p-b-20">
					<a href="new_cosecha.php" class="txt1">
						Nueva Cosecha
					</a>
				</div>
		</div>
		</div>
					</div>
				</form>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>