<?php
include 'conexion.php';
header("Content-Type: text/html; charset=ISO-8859-1", true);
$to = "a.miramar@lasallistas.org.mx";
echo $to;
$subject = "Reporte Aplicación (No reply)";
echo $subject;
$body = htmlspecialchars($_POST['a']);
echo $body;
/*$p = htmlspecialchars($_$POST['p']);
echo $p;*/

$from = htmlspecialchars($_POST['em']);
echo $from;
$message = "
<html>
<head>
<title> Mail </title>
</head>
	<body>
	<p> Hola, de parte de chiquita banana quisiera generar un reporte de funcionamiento de la aplicaci&#243n web<p>
	<p> Prioridad del asunto: $prioridad. </p>
	<p> Asunto del reporte: $body <br>
	<p> Atentamente: $from  .</p>
	</body>
	</html>
";
echo $message;

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From: Soporte Chiquita Banana <chiquitabanana@gmail.com>' ."\r\n";


$sqlCorreo = "SELECT * FROM T_User WHERE Email = '$from'";
$verificarCorreo= mysqli_query($conexion,$sqlCorreo);
if (mysqli_num_rows($verificarCorreo)>0){

	mail($to,$subject,$message,$headers);
	echo '<script>
	      alert("Correo enviado.");
		  window.location.href="home.php";
		  </script>';
	
}else
{
	echo '<script>
	      alert("Correo no registrado.");
		  window.history.go(-1);
		  </script>';
}

?>
	

