<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>users</title>
</head>

<body>
<?php
	$varcorreo= htmlspecialchars_decode($_POST["email"]);
	$varpassword= htmlspecialchars_decode($_POST["pass"]); 
	include "conexion.php";
	$sql="SELECT Password, Salt FROM T_User
	WHERE Email='".$varcorreo."'";
	$result=mysqli_query($conexion, $sql);
	$user=mysqli_fetch_assoc($result);
	
	
	//AQUI SE HACE LA BISQUEDA OARA VER QUE SEA ADMINISTRADOR
	$sqlT="SELECT User_Type FROM T_User
	WHERE Email='".$varcorreo."'";
	$resulttype=mysqli_query($conexion, $sqlT);
	$type=mysqli_fetch_assoc($resulttype);
	
	$hashedPassword = hash("sha256",$varpassword.$user["Salt"]);
	
	
	if($user["Password"]==$hashedPassword)
	{
		
		//saber a cual página redirigirse 
		switch ($type) {
    case $type["User_Type"]=="Administrador":
	header('Location:home.php');
				echo("ADMINISTRADOR");
    break;
				
    case $type["User_Type"]=="Owner":
		header('Location:home.php');
				echo("OWNER");
        break;
				
    case $type["User_Type"]=="Trabajador":
	    header('Location:home.php');
				echo("TRABAJADOR");
        break;
		
	}
	    } else{
		echo "</br>Datos incorrectos";
	}
	
	$stmt=$conexion->prepare("SELECT * FROM T_User WHERE Email=?");
	$stmt->bind_param("si",$_GET["email"]);
	$stmt->execute();
	$result=$stmt->get_result();
	if($result->num_rows===0)exit('No rows');
	while($row=$result->fetch_assoc()) {
		$ids[]=$row['User_ID'];
		$name[]=$row['Name'];
		$ages[]=$row['Email'];
	}
	var_export($MAIL);
	$stmt->close;
	
	mysqli_close($conexion);
	?>
</body>
</html>
