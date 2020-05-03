<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

require_once("cultivosVO.php");

class cultivosDAO {
	
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
		$sql = "SELECT * FROM T_Crop";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new cultivosVO();
			$vo->setAll($fila['Crop_ID'],$fila['Crop_Name'],$fila['Crop_Location'],$fila['Crop_Type'],$fila['Crop_Quant']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Crop (Crop_Name, Crop_Location, Crop_Type, Crop_Quant) VALUES ('".$vo->getName()."','".$vo->getLocation()."',".$vo->getType().",'".$vo->getQuant()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}

/*
echo "DAO -";
$objeto = new cultivosDAO();
print_r($objeto->selectAll());

$vo = new cultivosVO();
//$vo->setAll(0,"Pikachu","Electrico","35","who.jpg");
$objeto->Insert($vo);*/


?>