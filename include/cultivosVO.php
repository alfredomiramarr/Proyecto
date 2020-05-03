<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class cultivosVO {
	
	//ATRIBUTOS
	
	private $id;
	private $name;
	private $location;
	private $type;
	private $quant;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setName($valor) {
		$this->name = $valor;
	}
	public function setLocation($valor) {
		$this->location = $valor;
	}
	public function setType($valor) {
		$this->type = $valor;
	}
	public function setQuant($valor) {
		$this->quant = $valor;
	}
	
	public function setAll($id, $name, $location, $type, $quant) {
		$this->id = $id;
		$this->name = $name;
		$this->location = $location;
		$this->type = $type;
		$this->quant = $quant;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getName() {
		return $this->name;
	} 
	
	public function getLocation() {
		return $this->location;
	} 
	
	public function getType() {
		return $this->type;
	} 
	
	public function getQuant() {
		return $this->quant;
	} 
	
}


//$variable = new cultivosVO();
//$variable->setImagen("4.png");
//echo "HOLA" . $variable;
//print_r($variable->setAll());

?>