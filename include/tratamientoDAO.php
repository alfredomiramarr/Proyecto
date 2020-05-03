<?php
require_once("tratamientoVO.php");

class tratamientoDAO {
	
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
		$sql = "SELECT * FROM T_Care";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new tratamientoVO();
			$vo->setAll($fila['Care_ID'],$fila['Irrigation_ID'],$fila['Fertilizer_ID'],$fila['Plague_ID']/*,$fila['Harvest_ID']*/,$fila['Trafic_Light_ID'],$fila['Care_Name'],$fila['Care_Tipe']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Care (Care_Name, Care_Tipe) VALUES ('".$vo->getNombre()."','".$vo->getTipo()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}


echo "DAO -";
$objeto = new tratamientoDAO();
print_r($objeto->selectAll());
echo "________________";
$vo = new tratamientoVO();
$vo->setAll(0, 0, 0, 0, 0,"Pikachu","Electrico");
echo "SE SUPONE AQUI SE HACE EL INSERT";
$objeto->Insert($vo);
echo "AQUI YA SE HIZO PERO NEL";
print_r($objeto->selectAll());


?>