<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	session_start();
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
				/*MENU TOP*/		
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
			/*BODY Y BACKGROUND*/
			.body{
				font-family: 'Prompt', sans-serif;
				background-image: url('images/banana-back.jpg');
				  background-repeat: no-repeat;
				  background-attachment: fixed;  
				  background-size: cover;
				  justify-content: center;

			}
			/*TABLA DEL FORMULARIO*/
			.tabla10 {
				  width: 1100px;
				  height: 1000px;
				  background-color: rgba(255,255,255,0.75);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: relative;
				  top: 45px;
				  margin: 0 auto;
				  z-index:10;
				  font-family: 'Prompt', sans-serif;
				  font-size: 10px;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				}
				.tabla20{
					width: 500px;
					height: 600px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 1660px;
				  left:755px;
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
					width: 650px;
					height: 650px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 1150px;
				  left:95px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.tabla40{
					width: 500px;
					height: 500px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 1150px;
				  left:755px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
					.tabla50{
					width: 650px;
					height: 350px;
				  background-color: rgba(255,255,255,0.8);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: absolute;
				  top: 1820px;
				  left:90px;
				  z-index:10;

				  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
				  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
					}
				/*==================================================================
				[ Form ]*/

				.login100-form {
				  width: 100%;
				  font-family: 'Prompt', sans-serif;
				}

				.login100-form-title {
				  display: block;
				  font-size: 30px;
				  color: #4b2354;
				  line-height: 1.2;
				  text-align: center;
				  font-family: 'Prompt', sans-serif;
				}
				/*------------------------------------------------------------------
				[ Button ]*/
				.container-login100-form-btn {
				  width: 100%;
				  display: -webkit-box;
				  display: -webkit-flex;
				  display: -moz-box;
				  display: -ms-flexbox;
				  display: flex;
				  flex-wrap: wrap;
				  justify-content: center;
				  font-family: 'Prompt', sans-serif;
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
				  height: 50px;
				  background-color: #FF8700;
				  border-radius: 25px;

				  font-family: 'Prompt', sans-serif;
				  font-size: 14px;
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
				[ Input ]*/

				.wrap-input100 {
				  width: 100%;
				  height: 20px;
				  position: relative;
				  background-color: #fff;
				  border-radius: 20px;
				  font-family: 'Prompt', sans-serif;
				}
				.input100 {
				  font-size: 16px;
				  color: #4b2354;
				  line-height: 1.2;
				  font-family: 'Prompt', sans-serif;

				  display: block;
				  width: 100%;
				  height: 62px;
				  background: transparent;
				  padding: 0 20px 0 23px;
				}

				/*MANU AMARILLO*/
						/* Add a black background color to the top navigation */
				.menu {
					background-color: #FFD74F;
					font-size: 25px;
					shape-margin: 10px;
				  	overflow: hidden;
				  	margin: 5;
				  	display: block;
					text-align: center;
					box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
					font-family: 'Prompt', sans-serif;
				}

				/* Style the links inside the navigation bar */
				.menu a {
				  float: center;
				  color: #000000;
				  text-align: center;
				  padding: 20px 20px;
				  text-decoration: none;
				  font-size: 18px;
				  text-align: center;
				  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
				  font-family: 'Prompt', sans-serif;
				}

				/* Change the color of links on hover */
				.menu a:hover {
				  background-color: #FFFBB5;
				  color: black;
				  opacity: 0.7;
				}

				/* Add a color to the active/current link */
				.menu a.active {
				  background-color: #FF8700;
				  color: white;
				}
				.menu a.caout{
				background-color: white;
			  	color: white;
			  	float: right;
			  }
				.menu img{
						width: 60px;
						height: 60px;
					}
					/*TABLA DE CATALOGO*/
					table.paleBlueRows {
					  font-family: 'Prompt', sans-serif;
					  border: 3px solid white;
					  width: 800px;
					  height: 200px;
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
					  font-size: 14px;
					}
					/*BOTON DE LA TABLA*/
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
						.alert {
						  padding: 20px;
						  background-color: #f44336;
						  color: white;
						  opacity: 1;
						  transition: opacity 0.6s;
						  margin-bottom: 15px;
						}

						.alert.success {background-color: #4CAF50;}
						.alert.info {background-color: #2196F3;}
						.alert.warning {background-color: #ff9800;}

						.closebtn {
						  margin-left: 15px;
						  color: white;
						  font-weight: bold;
						  float: right;
						  font-size: 22px;
						  line-height: 20px;
						  cursor: pointer;
						  transition: 0.3s;
						}

						.closebtn:hover {
						  color: black;
						}
			
		</style>
		<div class="topnav" font-family= 'Prompt';>
			<a class="active" href="#home">Inicio</a>
			  <a href="cat_cultivos.php">Cat&#225logos</a>
			  <a href="new_cultivo.php">Nuevo Registro</a>
			  <a href="reporte.php"> Generar un reporte</a>
			 
			  <a class="out" href="logout.php" align="right">LOGOUT</label></a>
	  <img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52" align="right">
	  <a class="out" href="/NewProyect"> CHIQUITA BANANA </a>
	  <a class="out" href="new_user.php"> Registrar Nuevo Usuario </a>
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
<div class="menu">
	 CHIQUITA BANANA

	</div>
<body class="body">

	<div class="tabla10 p-l-50 p-r-50 p-t-30 p-b-30">		
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
					echo '<td><img src="'.$row["Img"].'" alt="'.$row["Img"].'"style="width:25%;"></td>';
					echo "<td> ". $row ["Care_Date"]. "</td>";
					echo "<td> ". $row ["Asing_Date"]. "</td>";
					
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
	
	
			<div class="tabla30 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<?php require 'grafica.php'; ?>

					</div>
				</form>
			</div>
			<div class="tabla20 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<?php require 'grafica1_issue.php'; ?>

					</div>
				</form>
			</div>
			<div class="tabla40 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
						<?php require 'grafica4_trat.php'; ?>

					</div>
				</form>
			</div>
			<div class="tabla50 p-l-50 p-r-50 p-t-30 p-b-30">		
			<div class="login100-form-logo" align="center">
				<img src="images/cosecha.png" alt="images/cosecha.png" height="25" width="25" align="center">
					<h3>Siembras</h3>
			</div>
			
				<div class="paleBlueRows2" align="center">
				<table class="paleBlueRows2" align="center">
					<thead>
					<tr>
					<th>HACIENDA</th>
					<th>CULTIVO SEMBRADO</th>
					<th>PIEZAS SEMBRADAS</th>
					<th>DIA DE SIEMBRA</th>		
					</tr>
					</thead>
					<tbody>
					<?php
					//include("include/conexion.php");
					//require_once("cosechasDAO.php");
				    //$id = $_COOKIE['id'];
				    //echo $id;
				      

					$sql2= "SELECT H.Name, C.Crop_Name, T.Crop_Quant, T.Sowing_Date FROM C_Hacienda H, C_Crop C, T_Sowing T WHERE T.Hacienda_ID = H.Hacienda_ID AND T.Crop_ID =C.Crop_ID AND T.Status = 'Active';";
					//$sql = "SELECT * FROM T_Harvest;";
					$result = mysqli_query($conexion,$sql2);


					if($result) {

					while ($row =mysqli_fetch_assoc($result)){

					echo "<tr>";
					echo "<td> ". $row ["Name"]. "</td>";
					echo "<td> ". $row ["Crop_Name"]. "</td>";
					echo "<td> ". $row ["Crop_Quant"]. "</td>";
					echo "<td> ". $row ["Sowing_Date"]. "</td>";

					echo "</tr>";
					}
					} else {
					echo "No hay registros para mostrar";
					}
					?>
					</tbody>
				</table>
				</div>
								
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>