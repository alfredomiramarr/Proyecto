<?php
require_once("g2VO.php");


class g2DAO {
	
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
		$sql = "SELECT T.Harvest_ID, H.Name, SUM(T.Harv_Quant) SUMA, H.Status FROM C_Hacienda H, C_Crop C, T_Harvest T WHERE T.Hacienda_ID = H.Hacienda_ID AND T.Crop_ID = C.Crop_ID AND H.Status = 'Active' GROUP BY H.Name";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new g2VO();
			$vo->setAll($fila['Harvest_ID'],$fila['Name'],$fila['SUMA'], $fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	/*function Insert($vo) {
		$sql = "INSERT INTO T_Harvest (Hacienda_ID, Crop_ID, Harv_Quant) VALUES ('".$vo->getHaciendaId()."','".$vo->getCropId()."', ".$vo->getQuant().")";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}*/
	
	
}
/*
echo "DAO - ";
//$objeto = new g2DAO();
//print_r($objeto->selectAll());
$dq=new g2DAO();
$quant=$dq->selectAll();
$variable=0;
$contador=0;
if(!empty($quant)){
            
            foreach ($quant as $cant) {
                
                if($contador>0){
                    echo ",";
                }
                $variable=$cant->getQuant();
                echo $variable;
                $contador = $contador + 1;
            }
        }*/



?>