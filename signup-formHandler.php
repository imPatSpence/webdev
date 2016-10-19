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
		$fName = $_POST['fName'];
		$_SESSION['fName'] = $fName;
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
		unset($_SESSION['lName']);
		$_SESSION["errorLastNameNotEntered"] = "Error, must enter a lastname!";
	}

	//Check email field
	if(isset($_POST["email"])  && $_POST["email"] != ""){

		if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		     //The email address is valid.
			$email = $_POST["email"];
			$_SESSION["email"] = $email;
			unset($_SESSION['errorEmailNotEntered']);
		} else{
		     //The email address is invalid.
				unset($_SESSION['email']);
				$_SESSION["errorEmailNotEntered"] = "Enter a valid email address format!";
		}
		
	}
	else{
		unset($_SESSION['email']);
		$_SESSION["errorEmailNotEntered"] = "Error, must enter an email!";

	}
		//Check username field
	if(isset($_POST["Username"])  && $_POST["Username"] != ""){
		$Username = $_POST["Username"];
		$_SESSION["Username"] = $Username;
		unset($_SESSION['UsernameNotEntered']);
	}
	else{
		unset($_SESSION['email']);
		$_SESSION["UsernameNotEntered"] = "Error, must enter a username!";

	}
		//Check password field
	if(isset($_POST["Password"])  && $_POST["Password"] != ""){
		$Password = $_POST["Password"];
		$_SESSION["Password"] = $Password;
		unset($_SESSION['PasswordNotEntered']);
	}
	else{
		unset($_SESSION['Password']);
		$_SESSION["PasswordNotEntered"] = "Error, must enter a password!";

	}
		//Check second password field
	if(isset($_POST["ConfirmPassword"])  && $_POST["ConfirmPassword"] != "" && $_POST["ConfirmPassword"] === $_POST["Password"]){
		$ConfirmPassword = $_POST["ConfirmPassword"];
		$_SESSION["ConfirmPassword"] = $ConfirmPassword;
		unset($_SESSION['ConfirmPasswordNotEntered']);
	}
	else{
		unset($_SESSION['ConfirmPassword']);
		if($_POST["ConfirmPassword"] === ""){
			$_SESSION["ConfirmPasswordNotEntered"] = "Error, must enter a second password!";
		}
		else{
			$_SESSION["ConfirmPasswordNotEntered"] = "Error, Passwords must match!";
		}

	}




	header('Location: signup.php');

?>