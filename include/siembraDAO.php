<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

require_once("siembraVO.php");

class siembraDAO {
	
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
		$sql = "SELECT * FROM T_Sowing";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new siembraVO();
			$vo->setAll($fila['Sowing_ID'],$fila['Hacienda_ID'],$fila['Crop_ID'],$fila['Crop_Quant'],$fila['Sowing_Date'],$fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Sowing (Hacienda_ID ,Crop_ID, Crop_Quant) VALUES ('".$vo->getHaciendaId()."',".$vo->getCropId().",'".$vo->getCropQuant()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}


?>