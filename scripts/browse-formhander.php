<?php
require_once "../dao.php";
session_start();
$db = new dao();


//makes sure there is a name
if(isset($_POST["fName"]) && $_POST["fName"] != ""){
	$firstname = $_POST["fName"];
	//$_SESSION["browseDisplay"];
	header('Location: /../browse.php?firstnames='.$firstname);
	}
//check if there is a typeofwork filter	
elseif(isset($_POST["TypeOfWork"]) && $_POST["TypeOfWork"] != "") {
	$TypeOfWork = $_POST["TypeOfWork"];
	header('Location: /../browse.php?TypeOfWork='.$TypeOfWork);

}
//check if there is a dronetype filter
elseif(isset($_POST["droneType"]) && $_POST["droneType"] != "") {
	$droneType = $_POST["droneType"];
	header('Location: /../browse.php?droneType='.$droneType);
}

//redirect to browse page 
else{
		$_SESSION["noName"] = "No name entered!";
		header('Location: /../browse.php');
}
?>

