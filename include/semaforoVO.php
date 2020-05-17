<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class semaforoVO {
	
	//ATRIBUTOS
	
	private $traficId;
	private $category;
	private $color;
	
	//METODOS
	
	//SET
	public function setTraficId($valor) {
		$this->id = $traficId;
	}
	public function setCategory($valor) {
		$this->category = $valor;
	}
	public function setColor($valor) {
		$this->color = $valor;
	}


	
	public function setAll($traficId, $category, $color) {
		$this->traficId = $traficId;
		$this->category = $category;
		$this->color = $color;
	}
	
	//GET - Recuperar
	
	public function getTraficId() {
		return $this->traficId;
	} 
	
	public function getCategory() {
		return $this->category;
	} 
	
	public function getColor() {
		return $this->color;
	} 
	
}


?>