<?php
require_once "dao.php";
session_start();
unset($_SESSION['UsernameTaken']);
	
	//Check first name field
	if(isset($_POST["fName"])  && $_POST["fName"] != ""){
		$fName = $_POST['fName'];
		$_SESSION['fName'] = $fName;
		unset($_SESSION['errorFirstNameNotEntered']);
	}
	//Error
	else{
		unset($_SESSION['fName']);
		$_SESSION["errorFirstNameNotEntered"] = "Must enter a firstname!";

	}
	//check last name field
	if(isset($_POST["lName"]) && $_POST["lName"] != ""){
		$lName = $_POST["lName"];
		$_SESSION["lName"] = $lName;
		unset($_SESSION['errorLastNameNotEntered']);
	}
	//Error
	else{
		unset($_SESSION['lName']);
		$_SESSION["errorLastNameNotEntered"] = "Must enter a lastname!";
	}

	//Check email field
	if(isset($_POST["email"])  && $_POST["email"] != ""){
		if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		     //The email address is valid.
			$email = $_POST["email"];
			$_SESSION["email"] = $email;
			unset($_SESSION['errorEmailNotEntered']);
		} else{
		     //Error The email address is invalid.
				unset($_SESSION['email']);
				$_SESSION["errorEmailNotEntered"] = "Enter a valid email address format!";
		}	
	}
	else{
		//Error
		unset($_SESSION['email']);
		$_SESSION["errorEmailNotEntered"] = "Must enter an email!";

	}
		//Check username field
	if(isset($_POST["Username"])  && $_POST["Username"] != ""){
		$Username = $_POST["Username"];
		$_SESSION["Username"] = $Username;
		unset($_SESSION['UsernameNotEntered']);
	}
	else{
		//Error
		unset($_SESSION['Username']);
		$_SESSION["UsernameNotEntered"] = "Must enter a username!";
	}
		//Check password field
	if(isset($_POST["Password"])  && $_POST["Password"] != ""){
		$Password = $_POST["Password"];
		$_SESSION["Password"] = $Password;
		unset($_SESSION['PasswordNotEntered']);
			//password length must be 8 or greater 
			if(!preg_match('/^[\w\d]{8,16}$/',$Password)){
				$_SESSION["PasswordNotEntered"] = "Password Must be between 8-16 chars";
			}
	}
	else{
		unset($_SESSION['Password']);
		$_SESSION["PasswordNotEntered"] = "Must enter a password!";

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
			$_SESSION["ConfirmPasswordNotEntered"] = "Must enter a second password!";
		}
		else{
			$_SESSION["ConfirmPasswordNotEntered"] = "Passwords must match!";
		}

	}
	//Check profile type field
	if(isset($_POST["Type"])  && $_POST["Type"] != ""){
		$Type = $_POST["Type"];
		$_SESSION["Type"] = $Type;
		unset($_SESSION['TypeNotEntered']);
	}
	else{
		//Error
		unset($_SESSION['Type']);
		$_SESSION["TypeNotEntered"] = "Must enter a type!";
	}
	//If any session errors set, redirect to signup page
	if(isset($_SESSION["errorFirstNameNotEntered"]) || isset($_SESSION["errorLastNameNotEntered"]) 
		|| isset($_SESSION["errorEmailNotEntered"]) || isset($_SESSION["UsernameNotEntered"]) 
		|| isset($_SESSION["PasswordNotEntered"])
		|| isset($_SESSION["ConfirmPasswordNotEntered"]) || isset($_SESSION["TypeNotEntered"])){
			
			header('Location: signup.php');
	}
	//Signup
	else{
	 	$db = new dao();
		
		//if DB has connection
		if($db->getConnection()){
			
			if($db->checkuser($Username)){
				//echo"username is taken";
				unset($_SESSION['UsernameTaken']);
				$_SESSION["UsernameTaken"] = "Username taken!";
				
				header('Location: signup.php');
			}
			else{
				
				//echo"username unique";
				//creates a user in database
				$Password = hash("sha256", "$Password" . "coolhash");
				$db->createUser($fName, $lName, $email, $Username, $Password,$Type);
				session_unset();
				$_SESSION["CreateSuccess"] = "Account Created Successfully!";
				header('Location: login.php');
			}			
		}
		else{
			echo"database not avail";
		}
	 	
	}
	 

?>