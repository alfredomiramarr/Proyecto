<?php
	require = 'conexion.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	require 'partials/header.php'	?>
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
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/banana-leaf.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
			<form class="login100-form validate-form">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter eMail">
					<input class="input100" type="correo" name="mail" placeholder="Mail " required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
					<input class="input100" type="password" name="pass" placeholder="Password" required="required">
					<span class="focus-input100"></span>
				</div>
				
				

				<div class="container-login100-form-btn">
					<button type="submit"  name="sub_button" value="Add" href="Forgot.html" class="login100-form-btn">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-40 p-b-20">
					<a href="Forgot.html"class="txt1">
						Forgot my password
					</a>
				</div>
				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

</body>
</html>