<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class siembraVO {
	
	//ATRIBUTOS
	
	private $siembraId;
	private $haciendaId;
	private $cropId;
	private $cropQuant;
	private $sowingDate;
	private $status;
	
	//METODOS
	
	//SET
	public function setSiembraId($valor) {
		$this->siembraId = $valor;
	}
	public function setHaciendaId($valor) {
		$this->haciendaId = $valor;
	}
	public function setCropId($valor) {
		$this->cropId = $valor;
	}
	public function setCropQuant($valor) {
		$this->cropQuant = $valor;
	}
	public function setSowingDate($valor) {
		$this->sowingDate = $valor;
	}
	public function setStatus($valor) {
		$this->status = $valor;
	}
	
	
	public function setAll($siembraId, $haciendaId, $cropId, $cropQuant, $sowingDate, $status) {
		$this->siembraId = $siembraId;
		$this->haciendaId = $haciendaId;
		$this->cropId = $cropId;
		$this->cropQuant = $cropQuant;
		$this->sowingDate = $sowingDate;
		$this->status = $status;
	}
	
	//GET - Recuperar
	
	public function getSiembraId() {
		return $this->siembraId;
	} 
	public function getHaciendaId() {
		return $this->haciendaId;
	} 
	public function getCropId() {
		return $this->cropId;
	} 
	
	public function getCropQuant() {
		return $this->cropQuant;
	} 
	
	public function getSowingDate() {
		return $this->sowingDate;
	} 
	public function getStatus() {
		return $this->status;
	} 
	 
	
}

?>