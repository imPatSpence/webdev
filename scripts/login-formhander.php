<?php
require_once "../dao.php";
session_start();

//Check username field
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
	//check password field
	if(isset($_POST["password"])  && $_POST["password"] != ""){
		$password = $_POST['password'];
		$_SESSION['password'] = $password;
		unset($_SESSION['passwordNotEntered']);
	}
	//Error
	else{
		unset($_SESSION['password']);
		$_SESSION["passwordNotEntered"] = "Must enter a password!";
		
	}
	
	//if didn't enter a password redirect to main page
	if(isset($_SESSION["usernameNotEntered"]) || isset($_SESSION["passwordNotEntered"])){
		header('Location: /../login.php');
	}
	//entered a username and password... check database
	else{
		$db = new dao();
		//if DB has connection
		if( $db->getConnection() ){
			$isValid = $db->checkUserAndPass($username, $password);
		
			if($isValid){ //valid username and password combination in database
				$_SESSION["authed_user"] = $username;
				header('Location: ../login.php');
			}
			//Invalid Password
			else{
				$_SESSION['invalid'] = " invalid username or password!";
				// echo "invalid user/pass";
				header('Location: ../login.php');
			}
		}
		else{
			echo "Coudn't connect to to DB";
		}
	}

?>
