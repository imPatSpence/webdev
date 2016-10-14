<?php
session_start();
?>

<html>
<body>

Welcome <?php echo $_POST["fName"]; echo $_POST["lName"]; ?><br />
Your email address is: <?php echo $_POST["email"]; ?> <br />
Your username input is: <?php echo $_POST["Username"]; ?> <br />
You password input is: <?php echo $_POST["Password"]; ?> <br />
Your ConfirmedPassword is: <?php echo $_POST["ConfirmPassword"]; ?> <br />

<?php 
$fName = $_POST["fName"];
$_SESSION["fName"] = $fName;

//$lName = $_POST["lName"];
//$_SESSION["lName"] = $lName;
//$email = $_POST["email"];
//$_SESSION["email"] = $email;
//$Username = $_POST["Username"];
//$_SESSION["Username"] = $Username;
//$Password = $_POST["Password"];
//$_SESSION["Password"] = $Password;	
header('Location: signup.php');

	if(isset($_POST["fName"])  && $_POST["fName"] != ""){
		$fName = $_POST["fName"];
		echo "fName is set";
		$_SESSION["fName"] = $Username;
	}
	else{
		$_SESSION["error"] = "Must enter a usernamse!";
	}
	}

?>

</body>
</html>