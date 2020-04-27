<?php
	$host = "localhost";
	//$host = "nemonico.com.mx";
	$user = "sepherot_javier";
	$password="Pzk6IDs4by";
	//$clave="Mmh9sfRjft";
	//$clave = "22M1r4m4r$*";
	$bd = "sepherot_javierBD";
	//$bd = "sepherot_alfredoBD";

$conexion = mysqli_connect($host, $user, $password, $bd);
if($conexion){
	//echo 'correcto';
}
else{
	//echo 'incorrecto';
}
?>