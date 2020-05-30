<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class wsVO {
	
	//ATRIBUTOS
	
	private $careId;
	private $hacienda;
	private $cultivo;
	private $semaforo;
	private $adate;
	
	//METODOS
	
	//SET
	public function setCareId($valor) {
		$this->careId = $valor;
	}
	public function setHacienda($valor) {
		$this->hacienda = $valor;
	}
	public function setCultivo($valor) {
		$this->cultivo = $valor;
	}
	public function setSemaforo($valor) {
		$this->semaforo = $valor;
	}
	public function setAdate($valor) {
		$this->adate = $valor;
	}
	
	public function setAll( $hacienda, $cultivo, $semaforo, $adate) {
		
		$this->hacienda = $hacienda;
		$this->cultivo = $cultivo;

		$this->semaforo = $semaforo;
	
		$this->adate = $adate;
		
	}
	
	//GET - Recuperar
	
	public function getCareId() {
		return $this->careId;
	} 
	public function getHacienda() {
		return $this->hacienda;
	}
	public function getCultivo() {
		return $this->cultivo;
	}
	
	public function getSemaforo() {
		return $this->semaforo;
	} 

	public function getAdate() {
		return $this->adate;
	}
}

/*
$variable = new wsVO();
$variable->setHaciendaId("hacienda");
echo "HOLA" . $variable->getHaciendaId();*/

?>