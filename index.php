<?php
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	
	session_start();
	
	if(isset($_SESSION['User_ID'])){
		header('Location: home.php');
	}
	
	require 'conexion.php';
	
	if(!empty($_POST['email']) && !empty($_POST['pass'])){
		//$records = $conexion->prepare("SELECT User_ID, Admin_ID, Admin_name, Admin_Last_Name, Admin_Email, Admin_Password FROM T_Admin
		//WHERE Admin_Email='".$_POST['email']."'");
		$sql2="SELECT User_ID, Admin_ID, Admin_name, Admin_Last_Name, Admin_Email, Admin_Password FROM T_Admin
		WHERE Admin_Email='".$_POST['email']."' limit 1";
		//print_r($records);
		//$records->bindParam("s",$_POST['email']);
		//$records->execute();
		//$results = $records->fetch(PDO::FETCH_ASSOC);
		
		$result = mysqli_query($conexion,$sql2);

		$row = mysqli_fetch_assoc($result);
		$rowcount=mysqli_num_rows($result);
	
		$message = '';
	
		if($rowcount>0 && $_POST['pass']=$row['Admin_Password']){
			echo "Entro el ID ".$row['User_ID'];
			$_SESSION['User_ID'] = $row['User_ID'];
			header('Location: home.php');
		}else{
			$message = 'Sorry, those credentials do not exist';
		}
	}
	
	//echo $_SESSION['User_ID']."SESION";
	//echo "EMAIL".$_POST['email'];
	//echo "PASSWORD".$_POST['pass'];
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CHIQUITA BANANA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<header align="center">
	
	<a> CHIQUITA BANANA </a>
	<img src="images/icon-banana.png" alt="MILO" height="52" width="52">
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
<!--===============================================================================================-->
	<style>
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
</head>
<body>
	
	<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	if(!empty($message)) :?>
	<p><div class="alert">
	  <span class="closebtn">&times;</span>  
	  <strong>ERROR!</strong> El nombre de usuario o la contraseña no son válidos, por favor verifique la información.
	</div></p>
	<script>
	var close = document.getElementsByClassName("closebtn");
	var i;

	for (i = 0; i < close.length; i++) {
	  close[i].onclick = function(){
	    var div = this.parentElement;
	    div.style.opacity = "0";
	    setTimeout(function(){ div.style.display = "none"; }, 600);
	  }
	}
	</script>
	<?php endif; ?>
	
	<div class="container-login100" style="background-image: url('images/banana-leaf.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-40 p-b-30">
			<form class="login100-form validate-form" method="POST" action="users.php">
				<div class="login100-form-logo" align="center">
					<img src="images/logoempresa.png" alt="MILO" height="52" width="52">
				</div>
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input10 validate-input m-b-20" data-validate="Enter eMail">
					<input class="input100" type="correo" name="email" placeholder="Mail " required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input10 validate-input m-b-25" data-validate = "Enter Password">
					<input class="input100" type="password" name="pass" placeholder="Password" required="required">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submit"  name="sub_button" onclick="alert('Validando credenciales')" value="Send" class="login100-form-btn">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-40 p-b-20">
					<a href="recopass.html"class="txt1">
						Olvide mi contraseña
					</a>
				</div>
				<div class="text-center p-t-40 p-b-20">
					<a href="new_user.php"class="txt1">
						Crear nuevo usuario
					</a>
				</div>
				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>

</body>
</html>