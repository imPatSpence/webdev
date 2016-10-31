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
							if(isset($_SESSION["costUpdated"])){
								echo $_SESSION["costUpdated"];
								echo "<br>";
								unset($_SESSION['costUpdated']);
							}
							?></div>
	
		<legend>Edit <?php echo $type[0]; ?> Account</legend>
			<form action ="/scripts/editAccount-formhander.php" method ="POST">
				<ul class= "signupList">
			
				
				<?php
				//Operator only options
				if($type[0] == "Operator"){
					//cost per hour
					echo "<li><label for=\"cost\">How much do you charge per hour?</label></li> "; 
					echo "<input type=\"text\" id=\"cost\" name=\"cost\" value=\"$cost[0]\">";

					//Profile Description
					echo "<li><label for=\"description\">Write a Profile Description:</label></li>
					<textarea id=\"description\" name=\"description\" rows=\"9\" cols=\"36\">$description[0]</textarea></li>";
				}
				//seeker only options
				else{
					echo "seeker options not implemented yet";
				}
				?>
				
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