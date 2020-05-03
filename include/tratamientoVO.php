<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class tratamientoVO {
	
	//ATRIBUTOS
	
	private $careId;
	private $riegoId;
	private $abonoId;
	private $plagaId;
	//private $cosechaId;
	private $semaforoId;
	private $nombre;
	private $tipo;
	
	//METODOS
	
	//SET
	public function setCareId($valor) {
		$this->careId = $valor;
	}
	public function setRiegoId($valor) {
		$this->riegoId = $valor;
	}
	public function setAbonoId($valor) {
		$this->abonoId = $valor;
	}
	public function setPlagaId($valor) {
		$this->plagaId = $valor;
	}
	/*public function setCosechaId($valor) {
		$this->cosechaId = $valor;
	}*/
	public function setSemaforoId($valor) {
		$this->semaforoId = $valor;
	}
	public function setNombre($valor) {
		$this->nombre = $valor;
	}
	public function setTipo($valor) {
		$this->tipo = $valor;
	}
	
	public function setAll($careId, $riegoId, $abonoId, $plagaId,/* $cosechaId,*/ $semaforoId, $nombre, $tipo) {
		$this->careId = $careId;
		$this->riegoId = $riegoId;
		$this->abonoId = $abonoId;
		$this->plagaId = $plagaId;
		/*$this->cosechaId = $cosechaId;*/
		$this->semaforoId = $semaforoId;
		$this->nombre = $nombre;
		$this->tipo = $tipo;
	}
	
	//GET - Recuperar
	
	public function getCareId() {
		return $this->careId;
	} 
	
	public function getRiegoId() {
		return $this->riegoId;
	} 
	
	public function getAbonoId() {
		return $this->abonoId;
	} 
	
	public function getPlagaId() {
		return $this->plagaId;
	} 
	
	/*public function getCosechaId() {
		return $this->cosechaId;
	}*/
	public function getSemaforoId() {
		return $this->semaforoId;
	} 
	
	public function getNombre() {
		return $this->nombre;
	} 
	
	public function getTipo() {
		return $this->tipo;
	}  
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>