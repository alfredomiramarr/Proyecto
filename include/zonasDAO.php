<?php
require_once("zonasVO.php");

class zonasDAO {
	
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
		$sql = "SELECT * FROM C_Zone";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new zonasVO();
			$vo->setAll($fila['Zone_ID'],$fila['Zone']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO C_Zone (Zone) VALUES ('".$vo->getZona()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}


//echo "DAO -";
//$objeto = new zonasDAO();
//print_r($objeto->selectAll());

//$vo = new zonasVO();
//$vo->setAll("10010","CDMX");
//$objeto->Insert($vo);
//print_r($objeto->selectAll());


?>