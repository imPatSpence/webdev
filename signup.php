<html>
 <head>
  <title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/signup.css">
 </head>
 <body>
	<?php require_once 'header.php'; ?>

	<div class = "signupbox">
		<h3>Create a new account!</h3>
			<form>
				<ul class= "signupList">

  				<li><label for="fName">First Name</label></li>
  				<input type="text" id="fName" name="fName"></li>
 				<li><label for="lName">Last Name</label></li>
				<input type="text" id="lName" name="lName">
				<li><label for="Email">Email:</label></li>
				<input type="text" id="email" name="email">
				<li><label for="Username">Username:</label></li>
				<input type="text" id="Username" name="Username">
				<li><label for="Password">Password:</label></li>
				<input type="text" id="Password" name="Password">
				<li><label for="ConfirmPassword">Confirm Password:</label></li>
				<input type="text" id="ConfirmPassword" name="ConfirmPassword">

				<button class="button" form="form1" value="Submit">Submit</button>
			</ul>
			</form>
	</div>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>