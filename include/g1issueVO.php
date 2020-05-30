<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo "Entro al VO";

class g1issueVO {
	
	//ATRIBUTOS
	
	private $id;
	private $name;
	//private $cName;
	private $quant;
	private $status;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setName($valor) {
		$this->name = $valor;
	}
	/*public function setCname($valor) {
		$this->cName = $valor;
	}*/
	public function setQuant($valor) {
		$this->quant = $valor;
	}
	public function setStatus($valor) {
		$this->status = $valor;
	}
	
	public function setAll($id, $name, $quant, $status) {
		$this->id = $id;
		$this->name = $name;
		//$this->cName = $cName;
		$this->quant = $quant;
		$this->status = $status;
	}	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getName() {
		return $this->name;
	}

	/*public function getCname() {
		return $this->cName;
	}*/
	public function getQuant() {
		return $this->quant;
	}
	public function getStatus() {
		return $this->status;
	}
	
}
//echo "Entro al VO";
/*
$variable = new g2VO();
echo "Entro al VO";
$variable->setAll( 1,"Hacienda","Cultivo", 12,"Active");
echo "ID <br>" . $variable->getId();
echo "<br> HACIENDA <br>" . $variable->getName();
echo "<br> CULTIVO <br>" . $variable->getCname();
echo "<br> CANTIDAD <br>" . $variable->getQuant();
echo "<br> ESTATUS <br>" . $variable->getStatus();*/

?>