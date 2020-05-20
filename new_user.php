<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	require_once("include/userDAO.php");
	require_once("include/typeDAO.php");
    $dao=new userDAO();
    $todos=$dao->selectAll();
    $dao2=new typeDAO();
    $todos2=$dao2->selectAll();
    $contador=0;
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
	<a href="logout.php" align="right">REGRESAR</a>
	
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
  <img src="images/icon-banana.png" alt="Chiquita Banana" align="right" height="52" width="52">
</div>
	
	<div class="container-login100" style="background-image: url('images/banana-crop.jpg');">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-30 p-b-30">
			<form class="login100-form validate-form" method="POST" action="alta_user.php">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					Nuevo Usuario
				</span>
				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="text" name="n" placeholder="Nombre" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="text" name="ap" placeholder="Apellido" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input10 validate-input m-b-20" >
					<select class="input100" name="tu" required="required">
				        <option value="0">Tipo de Usuario:</option>
				        <?php
				          if(!empty($todos2)){
				          foreach ($todos2 as $objeto2) {
				            echo '<option value="'.$objeto2->getUserType().'">'.$objeto2->getUserType().'</option>';
				            //$contador = $contador + 1;
				        	}
				          }
				        ?>
					</select>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input10 validate-input m-b-20" >
					<input class="input100" type="email" name="em" placeholder="Email" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="password" name="pass" placeholder="Password" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input10 validate-input m-b-25" >
					<input class="input100" type="password" name="confpass" placeholder="Confirmar Password" required="required">
					<span class="focus-input100"></span>
				</div>
						
				<div class="container-login100-form-btn">
					<button type="submit"  name="sub_button" value="Add" class="login100-form-btn">
						Registrar
					</button>

				</div>
			</form>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>

</body>
</html>