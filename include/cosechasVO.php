<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class cosechasVO {
	
	//ATRIBUTOS
	
	private $id;
	private $date;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setDate($valor) {
		$this->date = $valor;
	}
	
	public function setAll($id, $date) {
		$this->id = $id;
		$this->date = $date;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getDate() {
		return $this->date;
	} 
	
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>