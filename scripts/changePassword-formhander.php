<?php

//TODO: CHECK IF TWO NEW PASSWORDS ARE BLANK

require_once "../dao.php";
session_start();
$db = new dao();
$accountName = $_SESSION["authed_user"];

$currPassword = $db->getPassword($accountName);

		//checks if user inputted current password
	if(isset($_POST["currentPassword"]) && $_POST["currentPassword"] != ""){
		
		// if entered current password is same as one already in database
		if(md5($_POST["currentPassword"]) == $currPassword[0]){	
			//if new password and confirm password are set
			if((isset($_POST["newpassword"]) && ($_POST["newpassword"] != "")) && 
				(isset($_POST["newpassword2"])) && ($_POST["newpassword2"] != "")){
					
				if($_POST["newpassword"] == $_POST["newpassword2"]){
					//echo md5($_POST["newpassword"]);
					$db->setPassword($accountName, md5($_POST["newpassword"]));
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
