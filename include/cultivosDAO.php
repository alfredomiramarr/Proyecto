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
		$sql = "SELECT * FROM C_Crop";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new cultivosVO();
			$vo->setAll($fila['Crop_ID'],$fila['Crop_Name'],$fila['Crop_Type'],$fila['Crop_Quant'],$fila['Crop_Img'],$fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO C_Crop (Crop_Name, Crop_Type, Crop_Quant, Crop_Img) VALUES ('".$vo->getName()."','".$vo->getType()."',".$vo->getQuant().",'".$vo->getImg()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	function Delete($vo) {
 	$sql = "DELETE FROM C_Crop (Crop_Name, Crop_Type, Crop_Quant, Crop_Img) VALUES ('".$vo->getName()."','".$vo->getType()."','".$vo->getQuant()."','"-$vo->getImg()."')";
 	$resultado=mysqli_query($this->conn,$sql);
 	if($resultado)
 		return true;
 	else
 		return false;
 }
  function Update($vo) {
 	$sql = "UPDATE C_Crop SET (Crop_Name, Crop_Location, Crop_Type, Crop_Quant) VALUES ('".$vo->getName()."','".$vo->getLocation()."','".$vo->getType()."','".$vo->getQuant()."')";
 	$resultado=mysqli_query($this->conn,$sql);
 	if($resultado)
 		return true; 
 	else
 		return false;
 }
 function UpdateStatus($vo) {
 	$sql = "UPDATE C_Crop SET (Status) VALUES ('".$vo->getName()."','".$vo->getLocation()."','".$vo->getType()."','".$vo->getQuant()."')";
 	$resultado=mysqli_query($this->conn,$sql);
 	if($resultado)
 		return true; 
 	else
 		return false;
 }
	
	
}
/*
echo "DAO -";
echo "_____________";

$objeto = new cultivosDAO();
print_r($objeto->selectAll());
echo "_______________";

$vo = new cultivosVO();
$vo->setAll(0, 0, "Platano","Colima","Description",5);
$objeto->Insert($vo);
print_r($objeto->selectAll());
*/


?>