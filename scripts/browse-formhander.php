<?php
require_once "../dao.php";
session_start();
$db = new dao();


//makes sure there is a name
if(isset($_POST["fName"]) && $_POST["fName"] != ""){
	$firstname = $_POST["fName"];
		header('Location: /../browse.php?='.$firstname);
	}
//redirect to browse page 
else{
		$_SESSION["noName"] = "No name entered!";
		header('Location: /../browse.php');
}
?>

