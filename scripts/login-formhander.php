<?php
require_once "../dao.php";
session_start();

//Check first name field
	if(isset($_POST["username"])  && $_POST["username"] != ""){
		$username = $_POST['username'];
		$_SESSION['username'] = $username;
		unset($_SESSION['usernameNotEntered']);
	}
	//Error
	else{
		unset($_SESSION['username']);
		$_SESSION["usernameNotEntered"] = "Must enter a username!";
		
	}
	
	if(isset($_SESSION["usernameNotEntered"]) || isset($_SESSION["errorLastNameNotEntered"])){
		header('Location: /../login.php');
	}


?>
