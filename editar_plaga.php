<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include "conexion.php";
	header("Content-Type: text/html; charset=ISO-8859-1", true);

		session_start();
		ob_start();

		//$varsesion = $_SESSION['id'];
		

		
		$id = $_GET['id'];
		
		//echo "La ID que enviaste es ".$num;
		$sql = "SELECT * FROM C_Plague WHERE Plague_ID = ".$id.";";
		$existe=0;
		//echo $sql;
		$result = mysqli_query($conexion,$sql);
		while($consulta = mysqli_fetch_array($result))
		  {
		    $id = $consulta['Plague_ID'];
			$nombre =$consulta['Name'];
            $desc = $consulta['Description'];
            $img = $consulta['Image'];
			/*session_start();
			ob_start();*/
			//$_SESSION['i'] = $id;
		    $existe++;
		    //Todas tus variables que quieres que esten en los input
		  }

	require_once("include/plagasDAO.php");
    $dao=new plagasDAO();
    $todos=$dao->selectAll();
    $contador=0;;
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
				background-image: url('images/new_plaga.jpg');
				  background-repeat: no-repeat;
				  background-attachment: fixed;  
				  background-size: cover;
				  justify-content: center;

			}
			/*TABLA DEL FORMULARIO*/
			.tabla10 {
				  width: 600px;
				  background-color: rgba(255,255,255,0.9);
				  border-radius: 10px;
				  overflow: hidden;
				  align-items: center;
				  position: relative;
				  top: 45px;
				  margin: 0 auto;
				  z-index:10;
				  font-family: 'Prompt', sans-serif;

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
				.menu img{
						width: 60px;
						height: 60px;
					}
			
		</style>
		<div class="topnav" font-family= 'Prompt';>
			  <a href="home.php">Inicio</a>
			  <a href="cat_cultivos.php">Cat&#225logos</a>
			  <a class="active" href="#">Nuevo Registro</a>
			  

			  <a class="out" href="logout.php" align="right">LOGOUT</label></a>
			  <img src="images/icon-banana.png" alt="Chiquita Banana" height="52" width="52" align="right">
			  <a class="out" href="/NewProyect"> CHIQUITA BANANA </a>
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
	  <a href="new_cultivo.php">CULTIVO</a>
	  <a href="new_abono.php">FERTILIZANTE</a>
	  <a href="new_spray.php">DDT</a>
	  <a class="active" href="#">PLAGA</a>
	  <a href="new_riego.php">RIEGO</a>
	  <a href="new_hacienda.php">HACIENDA</a>

	</div>
<body class="body">

		<div class="tabla10 p-l-50 p-r-50 p-t-30 p-b-30">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
			<form class="login100-form validate-form" method="post" enctype="multipart/form-data">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					Nueva Plaga
				</span>

				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="text" name="n" placeholder="Nombre de la plaga" required="required" value="<?php echo $nombre;?>"/>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input10 validate-input m-b-20" >
					<input class="input100" type="text" name="d" placeholder="Descripción" required="required" value="<?php echo $desc;?>"/>
					<span class="focus-input100"></span>
				</div>
				<p>Insertar imagen</p>	
				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="file" name="img" placeholder="Imagen" value="<?php echo $img;?>"/>
					<span class="focus-input100"></span>
				</div>
				
				<div class="container-login100-form-btn">
					<button type="submit"  name="actualizar_btn" value="Add" class="login100-form-btn">
						Actualizar Informaci&#211n
					</button>
				</div>
			</form>
		</div>
	
	<div id="dropDownSelect1"></div>
	<?php
	header("Content-Type: text/html; charset=ISO-8859-1", true);
	$hoy= date('Y-m-d');
include "conexion.php";

if(isset($_POST['actualizar_btn']))
	{
		$id = $_GET['id'];
		$name = $_POST['n'];
		$desc = $_POST['d'];
        $imgname=$_FILES['img']['name'];
		$imgarchivo=$_FILES['img']['tmp_name'];
		$imgruta="images";
		$imgruta=$imgruta."/".$imgname;

		move_uploaded_file($imgarchivo, $imgruta);
		//echo $tipomaq;
		//echo $num;
		//session_start();
		//ob_start();
		$a = $id;
		
		if($id<>$a)
		{
			//session_start();
			//$varsesion = $_SESSION['correo'];
			$sqlverifica = "SELECT * FROM C_Plague WHERE Plague_ID = '$id'";
			$verificarPlaga = mysqli_query($conexion,$sqlverifica);
			if (mysqli_num_rows($verificarPlaga)>0)
			{
				echo $id;
				echo '<script>
			      alert("Intenta con otro ID.");
				  window.history.go(-1);
				  </script>';
			}
			else{
				$_UPDATE_SQL="UPDATE C_Plague Set
				  Name = '$name',
                  Description = '$desc',
				  Image='$imgruta'
	              WHERE Plague_ID = $id";
	              //move_uploaded_file($imgarchivo, $imgruta);
	            mysqli_query($conexion,$_UPDATE_SQL);
		        echo '<script>
			      alert("Plaga actualizada con exito");
				  window.location = "cat_plagas.php";
				  </script>';
				}
		}

		if ($id==$a) 
			{
				session_start();
				$varsesion = $_SESSION['correo'];
				$_UPDATE_SQL="UPDATE C_Plague Set
				  Name = '$name',
                  Description = '$desc',
				  Image='$imgruta'
	              WHERE Plague_ID = $id";
	            mysqli_query($conexion,$_UPDATE_SQL);
	            //move_uploaded_file($imgarchivo, $imgruta);
		        echo '<script>
			      alert("Registro actualizado con exito");
				   window.location = "cat_plagas.php";
				  </script>';
			}
	}
?>

</body>
</html>
