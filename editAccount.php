<html>
 <head>
  <title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/editAccount.css">
 </head>
 <body>
	<?php require_once 'header.php'; ?>

	<div class = "loginBox">
		<h3>Edit Account Information!</h3>
			<form>
				<ul class= "signupList">

  				<li><label for="fName">Change Email:</label></li>
  				<input type="text" id="fName" name="fName"></li>
 				<li><label for="lName">Change Password:</label></li>
				<input type="password" id="lName" name="lName">
				<li><label for="lName">Confirm Password:</label></li>
				<input type="password" id="lName" name="lName">
				<button class="button" form="form1" value="Submit">Submit</button>
				<li> Forgot Password?</li>
			</ul>
			</form>
	</div>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>