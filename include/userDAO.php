<?php
require_once("userVO.php");

class userDAO {
	
	private $host = "localhost";
	private $user = "sepherot_javier";
	private $password = "Pzk6IDs4by";
	private $database = "sepherot_javierBD";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	} 
	
	function connectDB() {
		$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
		return $conn;
	}
	
	function selectAll() {
		$sql = "SELECT * FROM T_User";
		$resultado = mysqli_query($this->conn,$sql);
		while($fila = mysqli_fetch_assoc($resultado)) {
			$vo = new userVO();
			$vo->setAll($fila['User_ID'],$fila['User_Type'],$fila['Name'],$fila['Last_Name'],$fila['Email'],$fila['Pass_Reco'],$fila['Password'],$fila['Salt'],$fila['Date_User'],$fila['Status']);
			$listadoVO[] = $vo;
		}
		if(!empty($listadoVO))
			return $listadoVO;
		else
			return false;
	}
	
	function Insert($vo) {
		$sql = "INSERT INTO T_User (User_Type, Name, Last_Name, Email, Password, Salt) VALUES ('".$vo->getUserType()."','".$vo->getUserName()."','".$vo->getUserLastName()."','".$vo->getUserEmail()."','".$vo->getUserPassword()."','".$vo->getSalt()."')";
		$resultado=mysqli_query($this->conn,$sql);
		if($resultado)
			return true;
		else
			return false;		
	}
	
	
}