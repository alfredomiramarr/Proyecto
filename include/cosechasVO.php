<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class cosechasVO {
	
	//ATRIBUTOS
	
	private $id;
	private $haciendaId;
	private $cropId;
	private $date;
	
	//METODOS
	
	//SET
	public function setId($valor) {
		$this->id = $valor;
	}
	public function setHaciendaId($valor) {
		$this->haciendaId = $valor;
	}
	public function setCropId($valor) {
		$this->cropId = $valor;
	}
	public function setDate($valor) {
		$this->date = $valor;
	}
	
	public function setAll($id, $haciendaId, $cropId, $date) {
		$this->id = $id;
		$this->haciendaId = $haciendaId;
		$this->cropId = $cropId;
		$this->date = $date;
	}
	
	//GET - Recuperar
	
	public function getId() {
		return $this->id;
	} 
	
	public function getHaciendaId() {
		return $this->haciendaId;
	}

	public function getCropId() {
		return $this->cropId;
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