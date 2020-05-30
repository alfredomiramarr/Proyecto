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
	<a href="logout.php" align="right" color="blue" >SALIR</a>
	
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
	  <a href="new_zona.php">Nuevo Registro</a>
	  <a class="active"href="#">Catálogos</a>
	  

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
	  <a href="cat_cosechas.php">COSECHA</a>
	  <a class="active" href="#">TRATAMIENTOS</a>

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
						<h1>TRATAMIENTOS</h1>
</head>

						<style>
						table.paleBlueRows {
						  font-family: SourceSansPro-Regular;
						  border: 3px solid white;
						  width: 700px;
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
					<th>CULTIVO </th>
					<th>SEMAFORO</th>
					<th>FECHA DE REGISTRO</th>	
					<th>FECHA DE ASIGNACION</th>		
					</tr>
					</thead>
					<tbody>
<?php
include "conexion.php";

//$sql="SELECT Code,CreatedDate,Asign_Date FROM T_MaintenanceAsign";
$sql="SELECT T.Care_ID, H.Name, C.Crop_Name, S.Img ,T.Care_Date, T.Asing_Date FROM T_Care T, C_Hacienda H, C_Crop C, C_Trafic_Light S WHERE T.Hacienda_ID = H.Hacienda_ID AND C.Crop_ID = T.Crop_ID AND T.Trafic_Light_ID = S.Trafic_Light_ID";
$resultado=mysqli_query($conexion,$sql);
if($resultado){

	while($row = mysqli_fetch_array($resultado))
{	
	$codigo=$row['Care_ID'];
	$fecha_inicio = $row['Care_Date'];
	$fecha_fin=$row['Asing_Date'];
	$hoy= date('Y-m-d');
	$hoy1=date_create($hoy);
	//echo $hoy;


	$fecha_1= date_create($fecha_inicio);
	$fecha_2=date_create($fecha_fin);
	//echo"Esta es fecha inicio".$fecha_inicio;
	//echo "Esta es fecha fin".$fecha_fin;

	$interval = date_diff($hoy1,$fecha_2);

	$prueba=$interval ->format('%R%a');
	//echo "Este es la pruena" .$prueba;

//echo "Hola".$interval;
//print_r($interval);
	if ($prueba >'7' ) {
   	$sql="UPDATE T_Care SET Trafic_Light_ID = 181010 WHERE Care_ID =$codigo";
		$result=mysqli_query($conexion,$sql);
		//echo "Actualizacion verde con exito";
	
	} else if ($prueba<='7' && $prueba >'0'){
    	$sql="UPDATE T_Care SET Trafic_Light_ID = 181020 WHERE Care_ID =$codigo";
		$result=mysqli_query($conexion,$sql);
		//echo "Actualizacion amarillo con exito";
	} 	else {
		if ($prueba<= '0')
		{
			$sql="UPDATE T_Care SET Trafic_Light_ID = 181030 WHERE Care_ID =$codigo";
		$result=mysqli_query($conexion,$sql);
		//echo "Actualizacion con rojo exito";
		
		}   
	}

	echo "<tr>";
					echo "<td> ". $row ["Care_ID"]. "</td>";
					echo "<td> ". $row ["Name"]. "</td>";
					echo "<td> ". $row ["Crop_Name"]. "</td>";
					echo '<td><img src="'.$row["Img"].'" alt="'.$row["Img"].'"style="width:40%;"></td>';
					echo "<td> ". $row ["Care_Date"]. "</td>";
					echo "<td> ". $row ["Asing_Date"]. "</td>";

					echo "<td><a href='eliminar_tratamiento.php?id=".$row["Care_ID"]."' style='color:red;''>ELIMINAR</a></div></td>";
					
					echo "</tr>";
					}

}
else {
					echo "No hay registros para mostrar";
					}
				?>
					</tbody>
				</table>
				</div>
			<div class="text-center p-t-40 p-b-20">
					<a href="new_tratamiento.php" class="txt1">
						Nuevo Tratamiento
					</a>
				</div>
		</div>
					</div>
				</form>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>