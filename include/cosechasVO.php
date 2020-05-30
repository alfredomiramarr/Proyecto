<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class cosechasVO {
	
	//ATRIBUTOS
	
	private $id;
	private $haciendaId;
	private $cropId;
	private $quant;
	private $date;
	private $status;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setHaciendaId($valor) {
		$this->haciendaId = $valor;
	}
	public function setCropId($valor) {
		$this->cropId = $valor;
	}
	public function setQuant($valor) {
		$this->quant = $valor;
	}
	public function setDate($valor) {
		$this->date = $valor;
	}
	public function setStatus($valor) {
		$this->status = $valor;
	}
	
	public function setAll($id, $haciendaId, $cropId, $quant, $date, $status) {
		$this->id = $id;
		$this->haciendaId = $haciendaId;
		$this->cropId = $cropId;
		$this->quant = $quant;
		$this->date = $date;
		$this->status = $status;
	}	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getHaciendaId() {
		return $this->haciendaId;
	}

	public function getCropId() {
		return $this->cropId;
	}
	public function getQuant() {
		return $this->quant;
	}

	public function getDate() {
		return $this->date;
	} 
	public function getStatus() {
		return $this->status;
	} 
	
}
/*
$variable = new cosechasVO();
$variable->setAll( 122,"Hacienda","Cultivo", 12, 0, "Active");
echo "ID <br>" . $variable->getId();
echo "<br> HACIENDA <br>" . $variable->getHaciendaId();
echo "<br> CULTIVO <br>" . $variable->getCropId();
echo "<br> CANTIDAD <br>" . $variable->getQuant();
echo "<br> FECHA <br>" . $variable->getDate();
echo "<br> ESTATUS <br>" . $variable->getStatus();*/

?>