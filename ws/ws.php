<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$varJS=0;
$varid = htmlspecialchars($_GET['id']);
 //require_once("wsVO.php");
 require_once("wsDAO.php");
//echo $varid;

 $varDAO = new wsDAO();
 //print_r($varDAO);
 
 $varVO=$varDAO->selectId($varid);
//print_r($varVO);
 
//echo $prueba;

 if(!$varVO)
 {
  $varJS=array('status' => 0,'msg' => "error");
 }
else
{
	//echo "entro";
	$varJS = array('Name'=> $varVO->getHacienda(), 'Crop_Name'=>$varVO->getCultivo(), 'Color'=>$varVO->getSemaforo(), 'Asing_Date'=>$varVO->getAdate());
	//echo $varJS."<br>";
	//print_r($varJS);
	//echo "salio";
}




header('Content-type: application/json; charset=ISO-8859-1;');
echo json_encode($varJS,JSON_INVALID_UTF8_SUBSTITUTE);

?>
