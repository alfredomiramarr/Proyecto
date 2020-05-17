<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class IssueVO {
	
	//ATRIBUTOS
	
	private $issueId;
	private $plagueId;
	private $careId;
	private $descripcion;
	private $fechaAlerta;
	private $trafficLight;
	
	//METODOS
	
	//SET
	public function setIssueId($valor) {
		$this->issueId = $valor;
	}
	public function setPlagueId($valor) {
		$this->plagueId = $valor;
	}
	public function setCareId($valor) {
		$this->careId = $valor;
	}
	public function setDescripcion($valor) {
		$this->descripcion = $valor;
	}
	public function setFechaAlerta($valor) {
		$this->fechaAlerta = $valor;
	}
	public function setTrafficLight($valor) {
		$this->trafficLight = $valor;
	}
	
	
	public function setAll($issueId, $plagueId, $careId, $descripcion, $fechaAlerta, $trafficLight) {
		$this->issueId = $issueId;
		$this->plagueId = $plagueId;
		$this->careId = $careId;
		$this->descripcion = $descripcion;
		$this->fechaAlerta = $fechaAlerta;
		$this->trafficLight = $trafficLight;
	}
	
	//GET - Recuperar
	
	public function getIssueId() {
		return $this->issueId;
	} 
	
	public function getPlagueId() {
		return $this->plagueId;
	} 
	
	public function getCareId() {
		return $this->careId;
	} 
	
	public function getDescripcion() {
		return $this->descripcion;
	} 
	
	public function getFechaAlerta() {
		return $this->fechaAlerta;
	}
	public function getTrafficLight() {
		return $this->trafficLight;
	} 

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>