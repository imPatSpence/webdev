<?php
session_start(); 

// $fName = $_POST["fName"];
// $_SESSION["fName"] = $fName;

//$lName = $_POST["lName"];
//$_SESSION["lName"] = $lName;
//$email = $_POST["email"];
//$_SESSION["email"] = $email;
//$Username = $_POST["Username"];
//$_SESSION["Username"] = $Username;
//$Password = $_POST["Password"];
//$_SESSION["Password"] = $Password;	


	//Check first name field
	if(isset($_POST["fName"])  && $_POST["fName"] != ""){
		$fName = $_POST["fName"];
		$_SESSION["fName"] = $fName;
		unset($_SESSION['errorFirstNameNotEntered']);
	}
	else{
		unset($_SESSION['fName']);
		$_SESSION["errorFirstNameNotEntered"] = "Error, must enter a firstname!";

	}
	//check last name field
	if(isset($_POST["lName"]) && $_POST["lName"] != ""){
		$lName = $_POST["lName"];
		$_SESSION["lName"] = $lName;
		unset($_SESSION['errorLastNameNotEntered']);
	}
	else{
		unset($_SESSION['fName']);
		$_SESSION["errorLastNameNotEntered"] = "Error, must enter a lastname!";
	}

	header('Location: signup.php');

?>