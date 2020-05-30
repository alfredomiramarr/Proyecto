<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("wsVO.php");

class wsDAO {
	
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
	
	function selectId($varid) {
		$sql = "SELECT H.Name, C.Crop_Name, S.Color, T.Asing_Date FROM T_Care T, C_Hacienda H, C_Crop C, C_Trafic_Light S WHERE T.Hacienda_ID = H.Hacienda_ID AND C.Crop_ID = T.Crop_ID AND T.Trafic_Light_ID = S.Trafic_Light_ID AND T.Status = 'Active' AND T.Care_ID = $varid limit 1";
		$resultado = mysqli_query($this->conn,$sql);
		$fila = mysqli_fetch_assoc($resultado);
			$vo = new wsVO();
			$vo->setAll($fila['Name'],$fila['Crop_Name'],$fila['Color'],$fila['Asing_Date']);
			
		
		if(!empty($vo))
			//print_r($listadoVO);
			return $vo;
		else
			return false;
	}
}
	
/*
echo "DAO -";
$objeto = new wsDAO();
print_r($objeto->selectAll());
echo "________________";
$vo = new tratamientoVO();
$vo->setAll(0, "101010", "131010", "141030", 0,"181010","Descripcion",0);
echo "SE SUPONE AQUI SE HACE EL INSERT";
$objeto->Insert($vo);
echo "AQUI YA SE HIZO PERO NEL";
print_r($objeto->selectAll());*/


?>