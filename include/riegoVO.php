<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class riegoVO {
	
	//ATRIBUTOS
	
	private $id;
	private $frecc;
	private $quant;
	
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
	
	public function setAll($id, $frecc, $quant) {
		$this->id = $id;
		$this->frecc = $frecc;
		$this->quant = $quant;
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
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>