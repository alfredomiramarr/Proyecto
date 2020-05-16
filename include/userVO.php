<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class userVO {
	
	//ATRIBUTOS
	
	private $userId;
	private $userType;
	private $userName;
	private $userLastName;
	private $userEmail;
	private $passReco;
	private $userPassword;
	private $salt;
	private $date;
	
	//METODOS
	
	//SET
	public function setUserId($valor) {
		$this->userId = $valor;
	}
	public function setUserType($valor) {
		$this->userType = $valor;
	}
	public function setUserName($valor) {
		$this->userName = $valor;
	}
	public function setUserLastName($valor) {
		$this->userLastName = $valor;
	}
	public function setUserEmail($valor) {
		$this->userEmail = $valor;
	}
	public function setPassReco($valor) {
		$this->passReco = $valor;
	}
	public function setUserPassword($valor) {
		$this->userPassword = $valor;
	}
	public function setSalt($valor) {
		$this->salt = $valor;
	}
	public function setDate($valor) {
		$this->date = $valor;
	}
	
	public function setAll($userId, $userType, $userName, $userLastName, $userEmail, $passReco, $userPassword, $salt, $date) {
		$this->userId = $userId;
		$this->userType = $userType;
		$this->userName = $userName;
		$this->userLastName = $userLastName;
		$this->userEmail = $userEmail;
		$this->passReco = $passReco;
		$this->userPassword = $userPassword;
		$this->salt = $salt;
		$this->date = $date;
	}
	
	//GET - Recuperar
	
	public function getUserId() {
		return $this->userId;
	} 
	
	public function getUserType() {
		return $this->userType;
	} 
	
	public function getUserName() {
		return $this->userName;
	} 
	
	public function getUserLastName() {
		return $this->userLastName;
	} 
	
	public function getUserEmail() {
		return $this->userEmail;
	}
	public function getPassReco() {
		return $this->passReco;
	} 
	public function getUserPassword() {
		return $this->userPassword;
	} 
	
	public function getSalt() {
		return $this->salt;
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