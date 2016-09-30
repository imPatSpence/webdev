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