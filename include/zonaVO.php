<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class zonaVO {
	
	//ATRIBUTOS
	
	private $id;
	private $zona;
	private $status;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setZona($valor) {
		$this->zona = $valor;
	}
	public function setStatus($valor) {
		$this->status = $status;
	}

	
	public function setAll($id, $zone, $status) {
		$this->id = $id;
		$this->zona = $zone;
		$this->status = $status;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getZona() {
		return $this->zona;
	}
	public function getStatus() {
		return $this->status;
	} 
	
}

?>