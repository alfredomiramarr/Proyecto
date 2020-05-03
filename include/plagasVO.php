<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class plagasVO {
	
	//ATRIBUTOS
	
	private $id;
	private $nombre;
	private $descripcion;

	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setNombre($valor) {
		$this->nombre = $valor;
	}
	public function setDescripcion($valor) {
		$this->descripcion = $valor;
	}

	
	public function setAll($id, $nombre, $descripcion) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getNombre() {
		return $this->nombre;
	} 
	
	public function getDescripcion() {
		return $this->descripcion;
	} 
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>