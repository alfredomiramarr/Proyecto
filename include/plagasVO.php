<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class plagasVO {
	
	//ATRIBUTOS
	
	private $id;
	private $nombre;
	private $descripcion;
	private $imagen;

	
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
	public function setImagen($valor) {
		$this->imagen = $valor;
	}

	
	public function setAll($id, $nombre, $descripcion, $imagen) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->imagen = $imagen;
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
	
	public function getImagen(){
		return $this->imagen;
	}
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>