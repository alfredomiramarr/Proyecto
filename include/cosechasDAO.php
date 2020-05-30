<?php
require_once("cosechasVO.php");


class cosechasDAO {
	
	private $host = "localhost";
	private $user = "sepherot_javier";
	private $password = "Pzk6IDs4by";
	private $database = "sepherot_javierBD";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	} 
	
	function connectDB() {
		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
		return $conn;
	}
	
	function selectAll() {
		$sql = "SELECT * FROM T_Harvest";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new cosechasVO();
			$vo->setAll($fila['Harvest_ID'],$fila['Hacienda_ID'],$fila['Crop_ID'], $fila['Harv_Quant'], $fila['Harvest_Date'], $fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Harvest (Hacienda_ID, Crop_ID, Harv_Quant) VALUES ('".$vo->getHaciendaId()."','".$vo->getCropId()."', ".$vo->getQuant().")";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}

	
	
	
}
/*
echo "DAO -";
$objeto = new cosechasDAO();
print_r($objeto->haciendaUno());*/



?>