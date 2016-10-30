<?php
require_once "../dao.php";
session_start();
$db = new dao();
$accountName = $_SESSION["authed_user"];
$description = $db->getDescription($accountName);

//Needs to check profile description if one is entered, update database.
//Needs to check to see if both passwords are same... if they are update database

//Check username field

	if(isset($_POST["description"]) && $_POST["description"] != ""){
		// if entered description is same as one already in
		if($_POST["description"] == $description[0]){	
		}
		else{
			$description = $_POST['description'];
		//	echo "$accountName $description";
			$db->setDescription($accountName,$description);
			$_SESSION["ProfileDescriptionUpdated"] = "Sucessfully updated profile Description!";
		}
		
	}
	header('Location: /../editAccount.php');
	
?>