<html>
<body>

Welcome <?php echo $_POST["fName"]; echo $_POST["lName"]; ?><br />
Your email address is: <?php echo $_POST["email"]; ?> <br />
Your username input is: <?php echo $_POST["Username"]; ?> <br />
You password input is: <?php echo $_POST["Password"]; ?> <br />
Your ConfirmedPassword is: <?php echo $_POST["ConfirmPassword"]; ?> <br />




<?php 
	if(isset($_POST["Username"])  && $_POST["Username"] != ""){
		echo "Username is set";
	}
	else{
		echo "Username is not set";
	}

?>

<?php if($_POST["Password"] !== $_POST["ConfirmPassword"]) {
	echo "Passwords don't match";
 }

?>
</body>
</html>