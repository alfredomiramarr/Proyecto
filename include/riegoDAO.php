<?php
require_once("riegoVO.php");

class riegoDAO {
	
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
		$sql = "SELECT * FROM C_Irrigation";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new riegoVO();
			$vo->setAll($fila['Irrigation_ID'],$fila['Frecuency'],$fila['Quantity'],$fila['Description'],$fila['Image'],$fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO C_Irrigation (Frecuency, Quantity, Description, Image) VALUES ('".$vo->getFrecuencia()."','".$vo->getQuant()."','".$vo->getDesc()."','".$vo->getImg()."')";
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