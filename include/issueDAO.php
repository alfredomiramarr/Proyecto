<?php
require_once("issueVO.php");

class issueDAO {
	
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
		$sql = "SELECT * FROM T_Issue";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new issueVO();
			$vo->setAll($fila['Issue_ID'],$fila['¨Plague_ID'],$fila['Care_ID'],$fila['Descripción'],$fila['Fecha_Alerta'],$fila['Traffic_Light']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_Issue (Descripción, Fecha_Alerta, Traffic_Light) VALUES ('".$vo->getDescripcion()."','".$vo->getFechaAlerta()."','".$vo->getTrafficLight()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}