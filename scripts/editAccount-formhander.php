<?php
require_once "../dao.php";
session_start();
$db = new dao();
$accountName = $_SESSION["authed_user"];

//Needs to check profile description if one is entered, update database.
//Needs to check to see if both passwords are same... if they are update database

//Check username field

	if(isset($_POST["description"]) && $_POST["description"] != ""){
		$description = $_POST['description'];
		echo "$accountName $description";
		$db->setDescription($accountName,$description);
	}
	
	header('Location: /../editAccount.php');
?>