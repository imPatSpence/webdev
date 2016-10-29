
<div id = "navbar">
		<ul class="toolbar2">
			<div class ="companyName">
				<a href="index.php"><li class = "companyName">Aerial Head Hunters</a></li>
				<img class="companyIcon" src="favicon/favicon-32x32.png">
			</div>
			<div class ="HAB">

				<li class ="toolbar"><a href="browse.php">Search</a></li>
			</div>
			<?php
			
			 echo "<div class =\"LS\">";
			 //if not set print login and username 
			 if(!isset($_SESSION["authed-user"])){
				echo "<li class =\"toolbar\"><a href=\"login.php\">Login</a></li>";
				echo "<li class =\"toolbar\"><a href=\"signup.php\">Signup</a></li>";
				echo "</div>" ;
			}
			else{
				"<li class =\"toolbar\"><a href=\"profile.php\">Profile</a></li>";
				"<li class =\"toolbar\"><a href=\"profile.php\">Edit</a></li>";
				"<li class =\"toolbar\"><a href=\"profile.php\">Logout!</a></li>";
			}
			?>
		</ul>
			</div>
</div>