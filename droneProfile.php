<?php require_once 'headernorectangle.php'; 
session_start();
$db = new dao();
$id = $_GET['page'];
$username = $db->getUsername($id);
$username = $username[0];
$cost = $db->getCost($username);
$cost = $cost[0];
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

  <title>droneProfile</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/droneProfile2.css">
	<script src="js/jquery-3.1.1.js"></script>
	<script src="/js/PgwSlider-master/pgwslider.js"></script>
	<link href="/js/PgwSlider-master/pgwslider.min.css" rel="stylesheet" type="text/css">

 </head>
 <body>
 	<div>

	
	<div>

		<div class="droneNameDisplay">
			<?php echo'Name: '. $db->getFirstName($username)[0] ." ". $db->getLastName($username)[0] ."<br>";
			echo'Contact Information:' ."<br>";
			echo'Email: ' . $db->getEmail($username)[0] ."<br>";
			echo'Charges ' . $cost ."$ an hour!"; 			
			?> 
		</div>

		<div class= "slideshow">
		
		<script>
		$(document).ready(function() {
			$('.pgwSlider').pgwSlider();
		});
		</script>
		
		<ul class="pgwSlider">
			<?php 
				$profileImageInformation = $db->getProfileImagesInformation($username);
	
				foreach ($profileImageInformation as $information){
					echo "<li><img src=\"" .$information["imgPath"] . " \" alt= \"" .$information["locationTaken"] . " \" data-description=\"" .$information["description"] ." \"></li>";
				}
			
			?>
			
			<!-- <li><img src="montreal_mini.jpg" alt="Montréal, QC, Canada" data-large-src="montreal.jpg"></li> -->

		</ul>
		</div>

		

		<div class= "DescriptionBox">
	
			<button class="blueButton">Description</button> 

				<div class ="DescriptionBoxText">
				<?php  
					//echo $_SESSION["profileUser"];
					$description = $db->getDescription($username);
					echo nl2br($description[0]);
				?>
			</div>
		</div>
		
		<div class= "reviewBox">
		
			<!--<button class="blueButton">Comments</button>  -->
			<br>
			Write a comment: <br>
			<form action ="/scripts/addComment-formhander.php" method ="POST">
					<input type="hidden" name="forProfile" value="<?php echo $id; ?>">
					<textarea id="comment" name="comment" rows="9" cols="36"></textarea></li>
					<input type = "submit" class ="blueSubmitButton">
			</form>
			Past comments:
			<?php 
			$comments = $db->getComments($id);
	
			foreach ($comments as $comment ){
				echo '<br>';
				echo $comment[0];
			}
			?>
		</div>
		

	</div>


	
	<div class="footer">
		<div id="rectangleFooter">
			<?php require_once 'footer.php'; ?>
		</div>
	</div>

</div>
	
 </body>
</html>