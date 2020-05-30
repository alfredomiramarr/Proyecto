<div class="paleBlueRows" align="center">
				<table class="paleBlueRows" align="center">
					<thead>
					<tr>
					<th>ID</th>
					<th>HACIENDA</th>
					<th>CULTIVO </th>
					<th>SEMAFORO</th>
					<th>FECHA DE REGISTRO</th>	
					<th>FECHA DE ASIGNACION</th>		
					</tr>
					</thead>
					<tbody>
<?php
include "conexion.php";

//$sql="SELECT Code,CreatedDate,Asign_Date FROM T_MaintenanceAsign";
$sql="SELECT T.Care_ID, H.Name, C.Crop_Name, S.Color ,T.Care_Date, T.Asing_Date FROM T_Care T, C_Hacienda H, C_Crop C, C_Trafic_Light S WHERE T.Hacienda_ID = H.Hacienda_ID AND C.Crop_ID = T.Crop_ID AND T.Trafic_Light_ID = S.Trafic_Light_ID";
$resultado=mysqli_query($conexion,$sql);
if($resultado){

	while($row = mysqli_fetch_array($resultado))
{	
	$codigo=$row['Care_ID'];
	$fecha_inicio = $row['Care_Date'];
	$fecha_fin=$row['Asing_Date'];
	$hoy= date('Y-m-d');
	$hoy1=date_create($hoy);
	echo $hoy;


	$fecha_1= date_create($fecha_inicio);
	$fecha_2=date_create($fecha_fin);
	echo"Esta es fecha inicio".$fecha_inicio;
	echo "Esta es fecha fin".$fecha_fin;

	$interval = date_diff($hoy1,$fecha_2);

	$prueba=$interval ->format('%R%a');
	echo "Este es la pruena" .$prueba;

//echo "Hola".$interval;
//print_r($interval);
	if ($prueba >'15' ) {
   	$sql="UPDATE T_Care SET Trafic_Light_ID = 181010 WHERE Care_ID =$codigo";
		$result=mysqli_query($conexion,$sql);
		echo "Actualizacion verde con exito";
	
	} else if ($prueba<='15' && $prueba >'0'){
    	$sql="UPDATE T_Care SET Trafic_Light_ID = 181020 WHERE Care_ID =$codigo";
		$result=mysqli_query($conexion,$sql);
		echo "Actualizacion amarillo con exito";
	} 	else {
		if ($prueba<= '0')
		{
			$sql="UPDATE T_Care SET Trafic_Light_ID = 181030 WHERE Code =$codigo";
		$result=mysqli_query($conexion,$sql);
		echo "Actualizacion con rojo exito";
		
		}   
	}

	echo "<tr>";
					echo "<td> ". $row ["Care_ID"]. "</td>";
					echo "<td> ". $row ["Name"]. "</td>";
					echo "<td> ". $row ["Crop_Name"]. "</td>";
					echo "<td> ". $row ["Color"]. "</td>";
					echo "<td> ". $row ["Care_Date"]. "</td>";
					echo "<td> ". $row ["Asing_Date"]. "</td>";

					echo "<td><a href='eliminar_tratamiento.php?id=".$row["Care_ID"]."' style='color:red;''>ELIMINAR</a></div></td>";
					
					echo "</tr>";
					}

}
else {
					echo "No hay registros para mostrar";
					}
				?>
					</tbody>
				</table>
				</div>
	
