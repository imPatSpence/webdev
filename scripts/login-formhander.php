<?php
require_once "dao.php";
session_start();

//Check first name field
	if(isset($_POST["username"])  && $_POST["fName"] != ""){
		$username = $_POST['username'];
		$_SESSION['username'] = $username;
		unset($_SESSION['errorFirstNameNotEntered']);
	}
	//Error
	else{
		unset($_SESSION['username']);
		$_SESSION["usernameNotEntered"] = "Must enter a username!";

	}


?>
