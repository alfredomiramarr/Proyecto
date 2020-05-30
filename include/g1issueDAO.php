<?php
require_once("g1issueVO.php");


class g1issueDAO {
	
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
		$sql = "SELECT T.Issue_ID, H.Name, COUNT(T.Issue_ID) COUNT, T.Status FROM T_Issue T, C_Hacienda H WHERE T.Hacienda_ID = H.Hacienda_ID AND H.Status = 'Active' GROUP BY H.Name";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new g1issueVO();
			$vo->setAll($fila['Issue_ID'],$fila['Name'],$fila['COUNT'], $fila['Status']);
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