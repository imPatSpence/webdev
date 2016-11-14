<?php

//TODO: CHECK IF TWO NEW PASSWORDS ARE BLANK

require_once "../dao.php";
session_start();
$db = new dao();
$accountName = $_SESSION["authed_user"];

$currPassword = $db->getPassword($accountName);

// $currInputPassword = hash("sha256",$_POST["newpassword"] . "coolhash");

		//checks if user inputted current password
	if(isset($_POST["currentPassword"]) && $_POST["currentPassword"] != ""){
		
		// if entered current password is same as one already in database
		if(hash("sha256",$_POST["currentPassword"] . "coolhash") == $currPassword[0]){	
			//if new password and confirm password are set
			if((isset($_POST["newpassword"]) && ($_POST["newpassword"] != "")) && 
				(isset($_POST["newpassword2"])) && ($_POST["newpassword2"] != "")){
					
				if($_POST["newpassword"] == $_POST["newpassword2"]){
					$db->setPassword($accountName, hash("sha256",$_POST["newpassword"] . "coolhash"));
					$_SESSION["passwordUpdated"] ="Sucessfully changed password!";
					header('Location: ../editAccount.php');
				}

			}

			else{
				$_SESSION["needTwoPasswords"] = "Please enter new passwords!";
				header('Location: ../changePassword.php');
			}
				
		}
		else{
			$_SESSION["wrongCurrentPassword"] = "Current password does not match";
				header('Location: ../changePassword.php');
		}
	
	}
?>
