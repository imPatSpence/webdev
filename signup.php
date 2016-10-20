<?php 
	require_once 'headernorectangle.php';
	session_start();
?>
<html>
 <head>
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <title>Signup!</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/signup.css">
 </head>
 <body>


	
	
	<fieldset class = "signupbox">

			<div class = "error"><?php if(isset($_SESSION["errorFirstNameNotEntered"])){
								echo $_SESSION["errorFirstNameNotEntered"];
								echo "<br>";
							}
							if(isset($_SESSION["errorLastNameNotEntered"])){
								echo $_SESSION["errorLastNameNotEntered"];
								echo "<br>";
							}
							if(isset($_SESSION["errorEmailNotEntered"])){
								echo $_SESSION["errorEmailNotEntered"];
								echo "<br>";
							}
							if(isset($_SESSION["UsernameNotEntered"])){
								echo $_SESSION["UsernameNotEntered"];
								echo "<br>";
							}
							if(isset($_SESSION["PasswordNotEntered"])){
								echo $_SESSION["PasswordNotEntered"];
								echo "<br>";
							}
							if(isset($_SESSION["ConfirmPasswordNotEntered"])){
								echo $_SESSION["ConfirmPasswordNotEntered"];
								echo "<br>";
							}
					?></div>

			<legend>Create an Account!</legend>
			<form action ="signup-formHandler.php" method ="POST">
				<ul class= "signupList">

  				<li><label for="fName">First Name</label></li>
  				<input type="text" id="fName" name="fName" value="<?php if(isset($_SESSION['fName'])){ echo htmlentities($_SESSION['fName']);}?>">
 				<li><label for="lName">Last Name</label></li>
				<input type="text" id="lName" name="lName" value="<?php if(isset($_SESSION['lName'])){ echo htmlentities($_SESSION['lName']);}?>">
				<li><label for="email">Email:</label></li>
				<input type="text" id="email" name="email" value="<?php if(isset($_SESSION['email'])){ echo htmlentities($_SESSION['email']);}?>">
				
				<li><label for="Username">Username:</label></li>
				<input type="text" id="Username" name="Username" value="<?php if(isset($_SESSION['Username'])){ echo htmlentities($_SESSION['Username']);}?>">

				<li><label for="Password">Password:</label></li>
				<input type="password" id="Password" name="Password">
				<li><label for="ConfirmPassword">Confirm Password:</label></li>
				<input type="password" id="ConfirmPassword" name="ConfirmPassword">
				<input type = "submit" class= "blueSubmitButton">
			</ul>

			</form>

		</fieldset>

	</div>



	<?php require_once 'footer.php'; ?>

	
 </body>
</html>