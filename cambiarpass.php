<?php

include 'conexion.php';
if (isset($_POST['em'])&& ($_POST['code'])&&($_POST['pass'])&&($_POST['confpass']))
{
	$email = $_POST['em'];
	$codigo = $_POST['code'];
	$contra1 =$_POST['pass'];
	$contra2 = $_POST['confpass'];
	$varSalt = uniqid();
	$contrahash = hash("sha256", $contra1.$varSalt);

	/*echo "Contraseña 1=...".$contra1."<br>";
	echo "Contraseña 2=...".$contra2."<br>";
	echo "Salt=...".$varSalt."<br>";
	echo "Contraseña 1 Hash=...".$contrahash."<br>";*/
	
	
if ($contra1 == $contra2)
		{
			$sql="SELECT * FROM T_User WHERE Email = '".$email."'";
			$query = mysqli_query($conexion,$sql);
			$resultado = mysqli_fetch_array($query);
		if ($resultado)
		{
			$clave = $resultado["Pass_Reco"];
			if ($codigo == $clave)
			{
				
				$sql2 = "UPDATE T_User SET Pass_Reco = 0,Password = '".$contrahash."', Salt = '".$varSalt."' WHERE Email = '".$email."'";
				//echo $sql2;
				mysqli_query($conexion,$sql2);
				mysqli_close($conexion);
				
				echo '<script> 
				alert ("Contraseña actualizada");
				window.location = "index.php";
				</script>';
				exit;
			}
			else
			{
				echo '<script> 
				alert ("Código erroneo, intenta de nuevo.");
				window.history.go(-1);
				</script>';
				exit;
			}
		}else
		{
			echo '<script> 
				alert ("Correo erroneo.");
				window.history.go(-1);
				</script>';
				exit;
		}
	}else
{
	echo '<script> 
				alert ("Las contraseñas no coinciden.");
				window.history.go(-1);
				</script>';
				exit;
}
	
}



?>