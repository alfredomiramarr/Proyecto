<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class cultivosVO {
	
	//ATRIBUTOS
	
	private $id;
	private $name;
	private $type;
	private $quant;
	private $img;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	
	public function setName($valor) {
		$this->name = $valor;
	}
	
	public function setType($valor) {
		$this->type = $valor;
	}
	public function setQuant($valor) {
		$this->quant = $valor;
	}
	public function setImg($valor) {
		$this->img = $valor;
	}
	
	public function setAll($id, $name, $type, $quant, $img) {
		$this->id = $id;
		$this->name = $name;
		$this->type = $type;
		$this->quant = $quant;
		$this->img = $img;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getName() {
		return $this->name;
	} 
	
	public function getType() {
		return $this->type;
	} 
	
	public function getQuant() {
		return $this->quant;
	} 
	public function getImg() {
		return $this->img;
	} 
	
}


//$variable = new cultivosVO();
//$variable->setImagen("4.png");
//echo "HOLA" . $variable;
//print_r($variable->setAll());

?>