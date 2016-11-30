	<?php 
	require_once 'headernorectangle.php';
	require_once "dao.php";
	session_start();
	$db = new dao();
	$accountName = $_SESSION["authed_user"];
	$type = $db->getAccountType($accountName);
	$description = $db->getDescription($accountName);
	$cost = $db->getCost($accountName);
	?>
<html>
 <head>
  <title>Edit Account</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/editAccount.css">
	 	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

 </head>
 <body>
	<?php
	
	//Must be logged in to see this page
	if(!isset($_SESSION["authed_user"])){
		$_SESSION["Unauthorized"] = "Must be logged in to see the previous Page!";
		header('Location: ../login.php');
	}
	?>

	<fieldset class = "loginbox">
	<div class = "success"><?php 
							if(isset($_SESSION["ProfileDescriptionUpdated"])){
								echo $_SESSION["ProfileDescriptionUpdated"];
								echo "<br>";
								unset($_SESSION['ProfileDescriptionUpdated']);
							}
							?></div>

	<div class = "error"><?php if(isset($_SESSION["needTwoPasswords"])){
								echo $_SESSION["needTwoPasswords"];
								echo "<br>";
								unset($_SESSION['needTwoPasswords']);
							}
							if(isset($_SESSION["wrongCurrentPassword"])){
								echo $_SESSION["wrongCurrentPassword"];
								echo "<br>";
								unset($_SESSION['wrongCurrentPassword']);
							}
							?></div>
		<legend>Change <?php echo $type[0]; ?> Account Password</legend>
			<form action ="/scripts/changePassword-formhander.php" method ="POST">
				<ul class= "signupList">

				<li><label for="currentPassword">Current Password:</label></li>
				<input type="password" id="currentPassword" name="currentPassword">
 				<li><label for="newpassword">Change Password:</label></li>
				<input type="password" id="newpassword" name="newpassword">
				<li><label for="newpassword2">Confirm Password:</label></li>
				<input type="password" id="newpassword2" name="newpassword2">
				<input type = "submit" class ="blueSubmitButton">
			</ul>
		</form>
			
		</fieldset>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>