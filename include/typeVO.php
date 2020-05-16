<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class typeVO {
	
	//ATRIBUTOS
	
	private $typeId;
	private $userType;
	
	//METODOS
	
	//SET
	public function setTypeId($valor) {
		$this->userId = $valor;
	}
	public function setUserType($valor) {
		$this->userType = $valor;
	}
	
	public function setAll($typeId, $userType) {
		$this->typeId = $typeId;
		$this->userType = $userType;
	}
	
	//GET - Recuperar
	
	public function getTypeId() {
		return $this->userId;
	} 
	
	public function getUserType() {
		return $this->userType;
	} 
}

/*
$variable = new PokemonVO();
$variable->setImagen("4.png");
echo "HOLA" . $variable->getImagen();
*/
?>