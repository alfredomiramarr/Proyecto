<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class tratamientoVO {
	
	//ATRIBUTOS
	
	private $careId;
	private $haciendaId;
	private $cultivoId;
	private $riegoId;
	private $abonoId;
	private $sprayId;
	private $semaforoId;
	private $desc;
	private $date;
	private $asignDate;
	private $status;
	
	//METODOS
	
	//SET
	public function setCareId($valor) {
		$this->careId = $valor;
	}
	public function setHaciendaId($valor) {
		$this->haciendaId = $valor;
	}
	public function setCultivoId($valor) {
		$this->cultivoId = $valor;
	}
	public function setRiegoId($valor) {
		$this->riegoId = $valor;
	}
	public function setAbonoId($valor) {
		$this->abonoId = $valor;
	}
	public function setSprayId($valor) {
		$this->sprayId = $valor;
	}
	public function setSemaforoId($valor) {
		$this->semaforoId = $valor;
	}
	public function setDesc($valor) {
		$this->desc = $valor;
	}
	public function setDate($valor) {
		$this->date = $valor;
	}
	public function setAsignDate($valor) {
		$this->asignDate = $valor;
	}
	public function setStatus($valor) {
		$this->status = $valor;
	}
	
	public function setAll($careId, $haciendaId, $cultivoId, $riegoId, $abonoId, $sprayId, $semaforoId, $desc, $date,$asignDate, $status) {
		$this->careId = $careId;
		$this->haciendaId = $haciendaId;
		$this->cultivoId = $cultivoId;
		$this->riegoId = $riegoId;
		$this->abonoId = $abonoId;
		$this->sprayId = $sprayId;
		$this->semaforoId = $semaforoId;
		$this->desc = $desc;
		$this->date = $date;
		$this->asignDate = $asignDate;
		$this->status = $status;
	}
	
	//GET - Recuperar
	
	public function getCareId() {
		return $this->careId;
	} 
	public function getHaciendaId() {
		return $this->haciendaId;
	}
	public function getCultivoId() {
		return $this->cultivoId;
	}
	public function getRiegoId() {
		return $this->riegoId;
	} 
	
	public function getAbonoId() {
		return $this->abonoId;
	} 
	
	public function getSprayId() {
		return $this->sprayId;
	} 
	
	public function getSemaforoId() {
		return $this->semaforoId;
	} 
	
	public function getDesc() {
		return $this->desc;
	} 
	
	public function getDate() {
		return $this->date;
	}  
	public function getAsignDate() {
		return $this->asignDate;
	}
	public function getStatus() {
		return $this->status;
	} 
}

/*
$variable = new tratamientoVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>