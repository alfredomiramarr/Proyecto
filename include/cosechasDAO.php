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
			$vo->setAll($fila['Harvest_ID'],$fila['Hacienda_ID'],$fila['Crop_ID'], $fila['Harv_Quant'], $fila['Harvest_Date']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Harvest (Harvest_ID, Hacienda_ID, Crop_ID, Harv_Quant, Harvest_Date) VALUES ('".$vo->getId()."','".$vo->getHaciendaId()."','".$vo->getCropId()."', ".$vo->getQuant().",'".$vo->getDate()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}

/*
echo "DAO -";
$objeto = new PokemonDAO();
//print_r($objeto->selectAll());

$vo = new PokemonVO();
$vo->setAll(0,"Pikachu","Electrico","35","who.jpg");
$objeto->Insert($vo);
*/

?>