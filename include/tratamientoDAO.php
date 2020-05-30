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
			$vo->setAll($fila['Care_ID'],$fila['Hacienda_ID'],$fila['Crop_ID'],$fila['Irrigation_ID'],$fila['Fertilizer_ID'],$fila['Spray_ID'],$fila['Trafic_Light_ID'],$fila['Description'],$fila['Care_Date'],$fila['Asing_Date'],$fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Care (Crop_ID, Hacienda_ID, Irrigation_ID, Fertilizer_ID, Spray_ID, Trafic_Light_ID, Description, Asing_Date) VALUES ('".$vo->getCultivoId()."','".$vo->getHaciendaId()."','".$vo->getRiegoId()."','".$vo->getAbonoId()."','".$vo->getSprayId()."','".$vo->getSemaforoId()."','".$vo->getDesc()."','".$vo->getAsignDate()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}

/*
echo "DAO -";
$objeto = new tratamientoDAO();
print_r($objeto->selectAll());
echo "________________";
$vo = new tratamientoVO();
$vo->setAll(0, "101010", "131010", "141030", 0,"181010","Descripcion",0);
echo "SE SUPONE AQUI SE HACE EL INSERT";
$objeto->Insert($vo);
echo "AQUI YA SE HIZO PERO NEL";
print_r($objeto->selectAll());*/


?>