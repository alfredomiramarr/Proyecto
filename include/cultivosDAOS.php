<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

 require_once("cultivosVO.php");
 
 
class cultivosDAOS {
	
	private $host = "nemonico.com.mx";
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
		if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
	}
	

	function selectID($id){
		$sql = "SELECT * FROM C_Crop WHERE Crop_ID = $id LIMIT 1";
		$resultado = mysqli_query($this->conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
		$vo = new cultivosVO();
		$vo->setAll($fila['Crop_ID'],$fila['Crop_Name'],$fila['Crop_Type'],$fila['Crop_Quant'],$fila['Crop_Img']);
		if(!empty($vo))
			return $vo;
		else
			return false;
	}
}
echo "DAO - full";
/*$id="101010";
$objeto = new cultivosDAOS();
print_r($objeto->selectID($id););*/

?>