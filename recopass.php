<?php
include 'conexion.php';
header("Content-Type: text/html; charset=ISO-8859-1", true);
$to = htmlspecialchars($_POST['em']);
$subject = "Reestablecer contraseña (No reply)";
$random = mt_rand(100000,999999);
$message = "
<html>
<head>
<title> Mail </title>
</head>
	<body>
	<p> Hola, has solicitado el cambio de tu contrase&#241a; tu c&#243digo de confirmaci&#243n es:  $random. </pr> 
	<p> Ingresa a la siguiente liga para reestablecer tu contrase&#241a <a href = 'http://nemonico.com.mx/alfredo/NewProyect/cambiarpass.html'> enlace </a> para que realices el cambio.</p> <br>
	<p> Cualquier duda o aclaraci&#243n, por favor comuniquese con su equipo se soporte.</p>
	</body>
	</html>
";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From: Soporte Chiquita Banana <chiquitabanana@gmail.com>' ."\r\n";


$sqlCorreo = "SELECT * FROM T_User WHERE Email = '$to'";
$verificarCorreo= mysqli_query($conexion,$sqlCorreo);
if (mysqli_num_rows($verificarCorreo)>0){
	$sql2 = "UPDATE T_User SET Pass_Reco = $random WHERE Email = '$to';";
mysqli_query($conexion,$sql2);
	mail($to,$subject,$message,$headers);
	echo '<script>
	      alert("Correo enviado.");
		  window.location.href="index.php";
		  </script>';
	exit;
}else
{
	echo '<script>
	      alert("Correo no registrado.");
		  window.history.go(-1);
		  </script>';
}

?>
	

