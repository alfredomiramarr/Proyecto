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
	private $status;

	
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
	public function setStatus($valor) {
		$this->status = $valor;
	}

	
	public function setAll($id, $nombre, $descripcion, $imagen, $status) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->imagen = $imagen;
		$this->status = $status;
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
	public function getStatus(){
		return $this->status;
	}
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>