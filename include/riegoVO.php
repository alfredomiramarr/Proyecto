<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class riegoVO {
	
	//ATRIBUTOS
	
	private $id;
	private $frecc;
	private $quant;
	private $desc;
	private $img;
	private $status;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setFrecuencia($valor) {
		$this->frecc = $valor;
	}
	public function setQuant($valor) {
		$this->quant = $valor;
	}	
	public function setDesc($valor) {
		$this->desc = $valor;
	}	
	public function setImg($valor) {
		$this->img = $valor;
	}	
	public function setStatus($valor) {
		$this->status = $valor;
	}	
	
	public function setAll($id, $frecc, $quant, $desc, $img, $status) {
		$this->id = $id;
		$this->frecc = $frecc;
		$this->quant = $quant;
		$this->desc = $desc;
		$this->img = $img;
		$this->status = $status;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getFrecuencia() {
		return $this->frecc;
	} 
	
	public function getQuant() {
		return $this->quant;
	} 
	public function getDesc() {
		return $this->desc;
	} 
	public function getImg() {
		return $this->img;
	} 
	
	public function getStatus() {
		return $this->status;
	} 
	
}

?>