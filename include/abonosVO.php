<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class abonosVO {
	
	//ATRIBUTOS
	
	private $id;
	private $nombre;
	private $descrip;
	private $img;
	private $status;
	
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setNombre($valor) {
		$this->nombre = $valor;
	}
	public function setDescrip($valor) {
		$this->descrip = $valor;
	}
	public function setImg($valor) {
		$this->img = $valor;
	}
	public function setStatus($valor) {
		$this->status = $valor;
	}


	
	public function setAll($id, $name, $descrip, $img, $status) {
		$this->id = $id;
		$this->nombre = $name;
		$this->descrip = $descrip;
		$this->img = $img;
		$this->status = $status;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getNombre() {
		return $this->nombre;
	} 

	public function getDescrip() {
		return $this->descrip;
	} 

	public function getImg() {
		return $this->img;
	} 
	public function getStatus() {
		return $this->status;
	} 
	
}


?>