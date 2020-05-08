<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	session_start();
	
	require 'conexion.php';
	
	if(isset($_SESSION['Admin_Email'])){
		//$records = $conexion->prepare("SELECT User_ID, Admin_ID, Admin_name, Admin_Last_Name, Admin_Email, Admin_Password FROM T_Admin
		//WHERE User_ID=:id")
		$sql2="SELECT User_ID, Admin_ID, Admin_name, Admin_Last_Name, Admin_Email, Admin_Password FROM T_Admin
		WHERE Admin_Email='".$_POST['email']."' limit 1";
		//$records->bindParam(':id', $_SESSION['User_ID']);
		//$records->execute();
		//$results = $records->fetch(PDO::FETCH_ASSOC);
		$result = mysqli_query($conexion,$sql2);

		$row = mysqli_fetch_assoc($result);
		$rowcount=mysqli_num_rows($result);
		
		$user = null;
		if($rowcount > 0){
			$user = $row;
		}
	}
	
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
	  <a href="new_zona.php">Nuevo Registro</a>
	  <a href="cat_zonas.php">Catálogos</a>

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
	  <a href="home.php">CULTIVOS</a>
	  <a href="home_zonas.php">ZONAS</a>
	  <a class="active" href="#">RIEGO</a>


	</div>
		
		<div class="container-login100" style="background-image: url('images/banana-back.jpg');">
			<style>
				.tabla10 {
				  width: 80%;
				  height: : 100%;
				  background: #E0FFFF;
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
						<h1>INDICADORES</h1>
						<?php require 'grafica3.php'; ?>

					</div>
				</form>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>