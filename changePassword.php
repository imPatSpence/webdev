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
		<legend>Change <?php echo $type[0]; ?> Account Password</legend>
			<form action ="/scripts/editAccount-formhander.php" method ="POST">
				<ul class= "signupList">

				<li><label for="currentPassword">Current Password:</label></li>
				<input type="password" id="currentPassword" name="currentPassword">
 				<li><label for="password">Change Password:</label></li>
				<input type="password" id="password" name="password">
				<li><label for="password2">Confirm Password:</label></li>
				<input type="password" id="password2" name="password2">
				<input type = "submit" class ="blueSubmitButton">
			</ul>
		</form>
			
		</fieldset>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>