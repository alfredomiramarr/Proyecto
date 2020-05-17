<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class abonosVO {
	
	//ATRIBUTOS
	
	private $id;
	private $nombre;
	private $frecuencia;
	private $cantidad;
	private $descrip;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setNombre($valor) {
		$this->nombre = $valor;
	}
	public function setFrecuencia($valor) {
		$this->frecuencia = $valor;
	}
	public function setCantidad($valor) {
		$this->cantidad = $valor;
	}
	public function setDescrip($valor) {
		$this->descrip = $valor;
	}


	
	public function setAll($id, $name, $frecuency, $quantity, $descrip) {
		$this->id = $id;
		$this->nombre = $name;
		$this->frecuencia = $frecuency;
		$this->cantidad = $quantity;
		$this->descrip = $descrip;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getNombre() {
		return $this->nombre;
	} 
	
	public function getFrecuencia() {
		return $this->frecuencia;
	} 

	public function getCantidad() {
		return $this->cantidad;
	} 

	public function getDescrip() {
		return $this->descrip;
	} 
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>