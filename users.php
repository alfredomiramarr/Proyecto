<?php

ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

session_start();
ob_start();
$correo = htmlspecialchars($_POST['email']);
$_SESSION['email'] = $correo;
$varsesion = $_SESSION['email'];

$pass= htmlspecialchars($_POST['pass']) ;

include "conexion.php";
$sql = "SELECT Email, Password, Salt FROM T_User WHERE Email = '".$correo."'";
$result= mysqli_query($conexion,$sql);
$user = mysqli_fetch_assoc($result);
$hashedPassword = hash("sha256",$pass.$user["Salt"]);

echo $correo."------->";
echo $user["Email"],"----->>>>>>";
echo $hashedPassword."------->";
echo $user["Password"],"----->>>>>>";
echo $user["Salt"],"----->>>>>>";

if ($user["Password"]==$hashedPassword)
	{	echo "Correcto";
		if (isset ($correo) && isset ($pass))
	{
			$consulta = "SELECT * FROM T_User WHERE Email = '$correo' AND Password = '$hashedPassword'";
			$resultado = mysqli_query($conexion,$consulta);
			$row =mysqli_fetch_array($resultado);
			if ($row ['User_Type']=='Administrador')
			{
				session_start();
				$_SESSION['Administrador']='Administrador';
				header('location:home.php');
			}else 
			{
				if ($row ['User_Type']=='Owner')
				{
					session_start();
					$_SESSION['Owner']='Owner';
					header('location:home.php');
				}
				else
				{
					if ($row ['User_Type']=='Trabajador')
					{
						session_start();
					$_SESSION['Trabajador']='Trabajador';
					header('location:home.php');
					}
				}
			}
		}
		
	}
	else 
	{
		echo "DATOS INCORRECTOS";
		/*echo '<script>
		alert ("Datos incorrectos, favor de verificar.");
		window.history.go(-1);
		</script>';*/
	}
mysqli_close($conexion);
?>
