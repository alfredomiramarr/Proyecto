<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

require_once("haciendaVO.php");

class haciendaDAO {
	
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
		$sql = "SELECT * FROM C_Hacienda";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new haciendaVO();
			$vo->setAll($fila['Hacienda_ID'],$fila['Zone_ID'],$fila['Owner_ID'],$fila['Admin_ID'],$fila['Name'],$fila['Location'],$fila['Number'],$fila['Creation_Date']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO C_Hacienda (Name, Location, Numbe, Creation_Date) VALUES ('".$vo->getName()."','".$vo->getLocation()."','".$vo->getNumber()."',".$vo->getCreation_Date().")";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}



?>