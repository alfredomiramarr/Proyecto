<?php

	//ini_set('display_errors', 1);
	//ini_set('display_startup_errors', 1);
	//error_reporting(E_ALL);
	
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
	echo "WELCOME'".$row['Admin_name']."' '".$row['Admin_Last_Name'];?>
	<br> YOU ARE SUCCESSFULLY LOGGED IN
	<a href="logout.php">LOGOUT</a>
	
	<?php endif; ?>


	<div class="topnav">
	  <a class="active" href="#home">Home</a>
	  <a href="crop.php">New Crop</a>
	  <a href="section.php">Catalogos</a>

	  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
	</div>
		
		<div class="container-login100" style="background-image: url('images/banana-back.jpg');">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
				<form class="login100-form validate-form">
					<div class="login100-form-logo" align="center">
						<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
					</div>
				</form>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>

</body>
</html>