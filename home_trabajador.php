<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	session_start();
	include "conexion.php";
	require_once("include/haciendaDAO.php");
	$daoh=new haciendaDAO();
    $todosh=$daoh->selectAll();
    $hacienda="200002";

	header("Content-Type: text/html; charset=ISO-8859-1", true);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="right" background="white">
		<style>
						
						/* Add a black background color to the top navigation */
			.topnav {
				font-family: 'Prompt', sans-serif;
			  background-color: white;
			  overflow: hidden;
			  margin: 5;
			  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			}

			/* Style the links inside the navigation bar */
			.topnav a {
			  float: left;
			  color: #000000;
			  text-align: right;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 15px;
			  font-family: 'Prompt', sans-serif;
			}

			/* Change the color of links on hover */
			.topnav a:hover {
			  background-color: #FFD74F;
			  color: black;
			  opacity: 0.5;
			}

			/* Add a color to the active/current link */
			.topnav a.active {
			  background-color: #FFD74F;
			  color: white;
			}
			.topnav a.out {
			  background-color: white;
			  color: black;
			  float: right;
			}
			.body{
				font-family: 'Prompt', sans-serif;
				background-image: url('images/home_trabajador.jpg');
				  background-repeat: no-repeat;
				  background-attachment: fixed;  
				  background-size: cover;	  
			}
			.txtx {
  
			  font-size: 16px;
			  line-height: 1.4;
			  color: #999999;
			  font-family: 'Prompt', sans-serif;
			}
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

						  font-family: 'Prompt', sans-serif;
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
						/* Add a black background color to the top navigation */
	.menu {
		font-family: 'Prompt', sans-serif;
		font-size: 25px;
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
		.tabla10 {
				  width: 580px;
				  height: 780px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 150px;
				  left:50px;
				  z-index:10;
				  font-family: 'Prompt', sans-serif;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				}
				.tabla20{
					width: 660px;
					height: 780px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 150px;
				  left:645px;
				  z-index:10;
				  font-family: 'Prompt', sans-serif;
				  justify-content: center;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.tabla30{
					width: 740px;
					height: 780px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 950px;
				  left:50px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.tabla40{
					width: 500px;
					height: 780px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 950px;
				  left:810px;
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
					/*TABLAS*/
					table.paleBlueRows {
					  font-family: 'Prompt', sans-serif;
					  border: 3px solid white;
					  width: 80%;
					  height: 80%;
					  text-align: center;
					  border-collapse: collapse;
					}
					table.paleBlueRows td, table.paleBlueRows th {
					  border: 5px solid white;
					  padding: 5px 10px;
					}
					table.paleBlueRows tbody td {
					  font-size: 12px;
					}
					table.paleBlueRows tr:nth-child(even) {
					  background: white;
					}
					table.paleBlueRows thead {
					  background: #FFD74F;
					  border-bottom: 5px solid white;
					}
					table.paleBlueRows thead th {
					  font-family: 'Prompt', sans-serif;
					  font-size: 15px;
					  font-weight: bold;
					  color: #000000;
					  text-align: center;
					  border-left: 2px solid white;
					}
					table.paleBlueRows thead th:first-child {
					  border-left: none;
					}

					table.paleBlueRows tfoot td {
					  font-size: 9px;
					}
					/*ESTILO DE GRAFICA DE BARRAS */
					.highcharts-figure, .highcharts-data-table table {
					    min-width: 310px; 
					    max-width: 800px;
					    margin: 1em auto;
					}

					#container {
					    height: 400px;
					}

					.highcharts-data-table table {
					    font-family: Verdana, sans-serif;
					    border-collapse: collapse;
					    border: 1px solid #EBEBEB;
					    margin: 10px auto;
					    text-align: center;
					    width: 100%;
					    max-width: 500px;
					}
					.highcharts-data-table caption {
					    padding: 1em 0;
					    font-size: 1.2em;
					    color: #555;
					}
					.highcharts-data-table th {
					    font-weight: 600;
					    padding: 0.5em;
					}
					.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
					    padding: 0.5em;
					}
					.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
					    background: #f8f8f8;
					}
					.highcharts-data-table tr:hover {
					    background: #f1f7ff;
					}
					/*------------------------------------------------------------------
				[ Button ]*/
				.container-login100-form-btn {
				  width: 30%;
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  flex-wrap: wrap;
				  justify-content: center;
				  font-family: 'Prompt', sans-serif;
				  margin: 0 auto;
				}

				.login100-form-btn {
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  justify-content: center;
				  align-items: center;
				  padding: 0 20px;
				  min-width: 160px;
				  height: 30px;
				  background-color: #FF8700;
				  border-radius: 25px;
				  align-self: center;
				  margin: 0 auto;

				  font-family: 'Prompt', sans-serif;
				  font-size: 12px;
				  color: #fff;
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

				.login100-form-btn:hover {
				  background-color: #4b2354;

				  box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -moz-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -webkit-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -o-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				  -ms-box-shadow: 0 10px 30px 0px rgba(189, 89, 212, 0.8);
				}
				/*------------------------------------------------------------------
				[ Alert validate ]*/

				.validate-input {
				  position: relative;
				  font-family: 'Prompt', sans-serif;
				}
				/*------------------------------------------------------------------
				/*------------------------------------------------------------------
				[ Input ]*/

				.wrap-input100 {
				  width: 100%;
				  height: 20px;
				  position: absolute;
				  background-color: #fff;
				  border-radius: 20px;
				  font-family: 'Prompt', sans-serif;
				  margin: 0 auto;
				}
				.input100 {
				  font-size: 16px;
				  color: #4b2354;
				  line-height: 1.2;
				  font-family: 'Prompt', sans-serif;
				  align-self: center;
				  margin: 0 auto;

				  display: block;
				  width: 60%;
				  height: 42px;
				  background: transparent;
				  padding: 0 20px 0 23px;
				}

			
		</style>

	<div class="topnav" font-family= 'Prompt';>
	  <a class="active" href="#home">Inicio</a>
	  <a href="new_cosecha.php">Registro de actividades</a>
	  <a href="tcat_cultivos.php">Cat&#225logos</a>

	  <a class="out" href="logout.php" align="right">LOGOUT</label></a>
	  <img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52" align="right">
	  <a class="out" href="/#"> CHIQUITA BANANA </a>
	  
	  
	  
	</div>
			
			
	
	</header>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icon-banana.png"/>
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="style/util.css">
	<!--<link rel="stylesheet" type="text/css" href="style/main.css">-->
	<!--<link rel="stylesheet" href="style/css/menu-bar.css">-->

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;800&display=swap" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</head>
<body class="body">
	<div class="menu">
	  CHIQUITA BANANA

	</div>

		<div class="tabla10 p-l-50 p-r-50 p-t-30 p-b-30">
			
				<div class="login100-form-logo" align="center">
					<h3>Distribuci&#243n porcentual total de cultivos </h3>
				</div>

				<?php include 'grafica.php'; ?>
		</div>
		<br>
		<div class="tabla20 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
				<img href="new_cosecha.php" src="images/cosecha.png" alt="images/cosecha.png" height="25" width="25" align="center">
					<h3>Cosechas</h3>
			</div>
			
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
					<tbody>
					<?php
					//include("include/conexion.php");
					//require_once("cosechasDAO.php");
				    //$id = $_COOKIE['id'];
				    //echo $id;
				      

					$sql2= "SELECT T.Hacienda_ID, T.Harvest_ID, T.Harv_Quant, T.Harvest_Date, H.Name,C.Crop_Name FROM C_Hacienda H, C_Crop C, T_Harvest T WHERE T.Hacienda_ID = H.Hacienda_ID AND T.Crop_ID =C.Crop_ID;";
					//$sql = "SELECT * FROM T_Harvest;";
					$result = mysqli_query($conexion,$sql2);


					if($result) {

					while ($row =mysqli_fetch_assoc($result)){

					echo "<tr>";
					echo "<td> ". $row ["Harvest_ID"]. "</td>";
					echo "<td> ". $row ["Name"]. "</td>";
					echo "<td> ". $row ["Crop_Name"]. "</td>";
					echo "<td> ". $row ["Harv_Quant"]. "</td>";
					echo "<td> ". $row ["Harvest_Date"]. "</td>";

					echo "<td><a href='eliminar_cosecha.php?id=".$row["Harvest_ID"]."' style='color:red;''>ELIMINAR</a></div></td>";
					
					echo "</tr>";
					}
					} else {
					echo "No hay registros para mostrar";
					}
					?>
					</tbody>
				</table>
				</div>
				<div class="text-center p-t-40 p-b-20" font-family='Prompt', sans-serif;>
					<a href="new_cosecha.php" class="txtx">
						Nueva Cosecha
					</a>
				</div>
				
		</div>
		<br>
		<div class="tabla40 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
				<img src="images/riego.png" alt="images/riego.png" height="25" width="25" align="center">
					<h3> RIESGOS </h3>
			</div>	
			<?php
				include 'grafica1_issue.php';

				?>
		</div>
		<br>
		<div class="tabla30 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
				<img class="imagn" src="images/trat.jpg" alt="images/trat.jpg" height="25" width="25" align="center">
					<h3>Tratamientos</h3>
			</div>	
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
			
		</div>

</body>
</html>