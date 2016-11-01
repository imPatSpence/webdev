<?php
require_once "../dao.php";
session_start();
$db = new dao();
$accountName = $_SESSION["authed_user"];
$description = $db->getDescription($accountName);
$cost = $db->getCost($accountName);


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
	if(isset($_POST["cost"]) && $_POST["cost"] != ""){
		// if entered cost is same as one already in
		if($_POST["cost"] == $cost[0]){	
		}
		else{
			$cost = $_POST['cost'];
			$db->setCost($accountName,$cost);
			$_SESSION["costUpdated"] = "Sucessfully updated profile cost!";
		}
	}
	if(isset($_POST["droneUse"]) && $_POST["droneUse"] != ""){
		// if entered cost is same as one already in
		if($_POST["droneUse"] == $cost[0]){	
		}
		else{
			$cost = $_POST['droneUse'];
			$db->setDroneUse($accountName,$cost);
			$_SESSION["droneUseUpdated"] = "Sucessfully updated drone use!";
		}
	}

	header('Location: /../editAccount.php');
	
?>