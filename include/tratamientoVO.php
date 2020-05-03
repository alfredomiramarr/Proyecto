<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class PokemonVO {
	
	//ATRIBUTOS
	
	private $id;
	private $nombre;
	private $tipo;
	private $nivel;
	private $imagen;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setNombre($valor) {
		$this->nombre = $valor;
	}
	public function setTipo($valor) {
		$this->tipo = $valor;
	}
	public function setNivel($valor) {
		$this->nivel = $valor;
	}
	public function setImagen($valor) {
		$this->imagen = $valor;
	}
	
	public function setAll($id, $name, $type, $level, $image) {
		$this->id = $id;
		$this->nombre = $name;
		$this->tipo = $type;
		$this->nivel = $level;
		$this->imagen = $image;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getNombre() {
		return $this->nombre;
	} 
	
	public function getTipo() {
		return $this->tipo;
	} 
	
	public function getNivel() {
		return $this->nivel;
	} 
	
	public function getImagen() {
		return $this->imagen;
	} 
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>