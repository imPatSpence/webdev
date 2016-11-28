	<?php 
	require_once 'headernorectangle.php';
	require_once "dao.php";
	session_start();
	$db = new dao();
	$accountName = $_SESSION["authed_user"];
	$type = $db->getAccountType($accountName);
	$description = $db->getDescription($accountName);
	$cost = $db->getCost($accountName);
	$droneType = $db->getDroneType($accountName);
	$droneUse = $db->getDroneUse($accountName);
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
							if(isset($_SESSION["droneUseUpdated"])){
								echo $_SESSION["droneUseUpdated"];
								echo "<br>";
								unset($_SESSION['droneUseUpdated']);
							}
							if(isset($_SESSION["droneTypeUpdated"])){
								echo $_SESSION["droneTypeUpdated"];
								echo "<br>";
								unset($_SESSION['droneTypeUpdated']);
							}
							if(isset($_SESSION["passwordUpdated"])){
								echo $_SESSION["passwordUpdated"];
								echo "<br>";
								unset($_SESSION['passwordUpdated']);
							}
							if(isset($_SESSION["imageUploaded"])){
								echo $_SESSION["imageUploaded"];
								echo "<br>";
								unset($_SESSION['imageUploaded']);
							}
							?></div>
			<!-- For imageupload ERRORS-->
			<div class = "error"><?php if(isset($_SESSION["imageUploadedError"])){
								echo $_SESSION["imageUploadedError"];
								echo "<br>";
								unset($_SESSION['imageUploadedError']);
							}?></div>
	
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
					echo"<br>";
					
					echo"Type of drone: $droneType[0]</br>";

					echo"<select name=\"droneType\" id=\"dronetype\"> ";
					echo '<option selected disabled ">Select</option>';
					echo '<option value="Quadracopter">Quadracopter</option>';
 					echo '<option value="Fixed wing">Fixed Wing</option>';
					echo "</select>";

					echo"<br>";
					echo"Type of work: $droneUse[0] </br>";
					echo"<select name=\"droneUse\" id=\"doneUse\"> ";
					echo '<option selected disabled ">Select</option>';
					echo '<option value="Housing">Housing</option>';
 					echo "<option value=\"Photography\">Photography</option>";
 					echo "<option value=\"Military\">Military</option>";
 				//	echo "<option value=\"volvo\">Volvo</option>";
					echo "</select>";
  
				}
				//seeker only options
				else{
					//Profile Description
					echo "<li><label for=\"description\">Write a Profile Description:</label></li>
					<textarea id=\"description\" name=\"description\" rows=\"9\" cols=\"36\">$description[0]</textarea></li>";
					echo"<br>";
				}
				
				?>
				<li><a class="password" href="/imageUpload.php">Upload Profile Images</a>
 				<li><a class="password" href="/changePassword.php">Change Password</a>
				<input type = "submit" class ="blueSubmitButton">
			</ul>
		</form>
			
		</fieldset>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>