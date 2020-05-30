<?php //VO's


public function  ($hacienda, $cultivo, $haciendaId) {
		$this->hacienda = $hacienda;
		$this->cultivo = $cultivo;
		$this->haciendaId = $haciendaId;
		
	}
?>

<?php
	function haciendaUno($variableid){
		$sql2= "SELECT T.Hacienda_ID, H.Name,C.Crop_Name FROM C_Hacienda H, C_Crop C, T_Harvest T WHERE T.Hacienda_ID = H.Hacienda_ID AND T.Crop_ID =C.Crop_ID AND T.Hacienda_ID=".$variableid."";
	$resultado = mysqli_query($this->conn,$sql2);
	while($fila = mysqli_fetch_assoc($resultado)){
		$vo = new cosechasVO();
		$vo->setHaciendaUno($fila['Hacienda_ID'],$fila['Name'],$fila['Crop_Name']);
		$listadoVO[] = $vo;
	}
	if($resultado)
			return true;
		else
			return false;
	}
	//print_r($vo);
	/*

	function NombreHacienda2(){
		$sql2= "SELECT C_Hacienda.Name, C_Crop.Name, T_Harvest.Hacienda_ID FROM T_Harvest inner join C_Hacienda ON T_Harvest.Hacienda_ID = C_Hacienda.Hacienda_ID inner join C_Crop ON T_Harvest.Crop_ID = C_Crop.Crop_ID  WHERE T_Harvest.HarvestID = '200002'";
	$queryB = mysqli_query($conexion,$sql2);
	$resultado = mysqli_fetch_array($queryB);
	if($resultado)
			return true;
		else
			return false;
	}	

 
	/*$sql3= "SELECT C_Crop.Name, T_Issue.Description FROM T_Issue inner join C_Crop ON T_Issue.Crop_ID = C_Crop.Crop_ID WHERE T_Issue.Traffic_Light = 'Red'";
	$queryC = mysqli_query($conexion,$sql3);
	$resultado = mysqli_fetch_array($queryC);

 
	$sql4= "SELECT sum(C_Crop.Quantity) FROM C_Crop";
	$queryD = mysqli_query($conexion,$sql4);
	$resultado = mysqli_fetch_array($queryD);

	print_r($resultado);*/
?>