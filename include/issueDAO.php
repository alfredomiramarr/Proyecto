<?php
require_once("issueVO.php");

class issueDAO {
	
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
		$sql = "SELECT * FROM T_Issue";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new issueVO();
			$vo->setAll($fila['Issue_ID'], $fila['Hacienda_ID'], $file['Crop_ID'], $fila['Plague_ID'],$fila['Spray_ID'],$fila['Description'],$fila['Fecha_Alerta'],$fila['Trafic_Light_ID'],$fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Issue (Hacienda_ID, Crop_ID, Spray_ID, Plague_ID, Trafic_Light_ID, Description) VALUES ('".$vo->getHaciendaID()."','".$vo->getCropId()."','".$vo->getCareId()."','".$vo->getPlagueId()."','".$vo->getTrafficLight()."','".$vo->getDescripcion()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			//echo $resultado."DAO - true";
			return true;
		else
			return false;
			//echo $resultado."DAO - false";		
	}
		
}
/*
echo "DAO - full";
$objeto = new issueDAO();
print_r($objeto->Insert());*/
?>