<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class issueVO {
	
	//ATRIBUTOS
	
	private $issueId;
	private $haciendaId;
	private $cropId;
	private $careId;
	private $plagueId;
	private $trafficLight;
	private $descripcion;
	private $fechaAlerta;
	private $status;
	
	//METODOS
	
	//SET
	public function setIssueId($valor) {
		$this->issueId = $valor;
	}
	public function setHaciendaId($valor) {
		$this->haciendaId = $valor;
	}
	public function setCropId($valor) {
		$this->cropId = $valor;
	}
	public function setCareId($valor) {
		$this->careId = $valor;
	}
	public function setPlagueId($valor) {
		$this->plagueId = $valor;
	}
	public function setTrafficLight($valor) {
		$this->trafficLight = $valor;
	}
	public function setDescripcion($valor) {
		$this->descripcion = $valor;
	}
	public function setFechaAlerta($valor) {
		$this->fechaAlerta = $valor;
	}
	public function setStatus($valor) {
		$this->status = $valor;
	}
	
	
	public function setAll($issueId, $haciendaId, $cropId, $careId, $plagueId, $trafficLight, $descripcion, $fechaAlerta, $status) {
		$this->issueId = $issueId;
		$this->haciendaId = $haciendaId;
		$this->cropId = $cropId;
		$this->careId = $careId;
		$this->plagueId = $plagueId;
		$this->trafficLight = $trafficLight;
		$this->descripcion = $descripcion;
		$this->fechaAlerta = $fechaAlerta;
		$this->status = $status;
	}
	
	//GET - Recuperar
	
	public function getIssueId() {
		return $this->issueId;
	} 
	public function getHaciendaId() {
		return $this->haciendaId;
	}
	public function getCropId() {
		return $this->cropId;
	}
	public function getCareId() {
		return $this->careId;
	} 
	
	public function getPlagueId() {
		return $this->plagueId;
	} 
	public function getTrafficLight() {
		return $this->trafficLight;
	} 
		
	public function getDescripcion() {
		return $this->descripcion;
	} 
	
	public function getFechaAlerta() {
		return $this->fechaAlerta;
	}
	
	public function getStatus() {
		return $this->status;
	} 
}
/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>