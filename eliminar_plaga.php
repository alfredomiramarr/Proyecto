<?php
	include "conexion.php";
		session_start();
		ob_start();

		$varsesion = $_SESSION['correo'];
											
		$hoy = date('Y-m-d');
		
		$num=$_GET['id'];
		//echo "La ID que enviaste es ".$id;
		$sql = "UPDATE C_Plague SET Status = 'Inactive'
		WHERE Plague_ID = $num";
		//$existe=0;
		//echo $sql;
		$result = mysqli_query($conexion,$sql);
		if ($result)
		{
			echo '<script>
	      alert("Registro eliminado exitosamente");
		  window.location = "cat_plagas.php";
		  </script>';
		}

?>