<?php
require_once "dao.php";
session_start();

	$db = new dao();
	$accountName = $_SESSION["authed_user"];
	$id = $db->getAccountID($accountName);
	
?>
<div id = "navbar">
		<ul class="toolbar2">
			<div class ="companyName">
				<a href="index.php"><li class = "companyName">Aerial Head Hunters</a></li>
				<img class="companyIcon" src="favicon/favicon-32x32.png">
			</div>
			<div class ="HAB">

				<li id = "tabBrowse" class ="toolbar"><a href="browse.php">Search</a></li>
			</div>
			<?php
			
			 echo "<div class =\"LS\">";
			 //if not logged in print signup and login 
			 if(!isset($_SESSION["authed_user"])){
				echo "<li id = \"tabLogin\" class =\"toolbar\"><a href=\"login.php\">Login</a></li>";
				echo "<li id = \"tabSignup\" class =\"toolbar\"><a href=\"signup.php\">Signup</a></li>";
				echo "</div>" ;
			}
			//else print profile edit and logout
			else{
				echo "<li class =\"toolbar\"><a href=\"droneProfile.php?page=$id[0]\">Profile</a></li>";
				echo "<li id = \"tabEdit\" class =\"toolbar\"><a href=\"editAccount.php\">Edit</a></li>";
				echo "<li class =\"toolbar\"><a href=\"logout.php\">Logout!</a></li>";
			}
			?>
		</ul>
			</div>
</div>
