<?php
require_once("PokemonVO.php");

class PokemonDAO {
	
	private $host = "localhost";
	private $user = "sepherot_test";
	private $password = "test5";
	private $database = "sepherot_BD";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	} 
	
	function connectDB() {
		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
		return $conn;
	}
	
	function selectAll() {
		$sql = "SELECT * FROM T_Pokemon";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new PokemonVO();
			$vo->setAll($fila['ID_Pokemon'],$fila['Pok_Nombre'],$fila['Pok_Tipo'],$fila['Pok_Nivel'],$fila['Pok_Foto']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Pokemon (Pok_Nombre, Pok_Tipo, Pok_Nivel, Pok_Foto) VALUES ('".$vo->getNombre()."','".$vo->getTipo()."',".$vo->getNivel().",'".$vo->getImagen()."')";
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