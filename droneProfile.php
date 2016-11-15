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
	<link rel="stylesheet" type="text/css" href="/styles/droneProfile2.css">
 </head>
 <body>
 	<div>

	
	<div>

		<div class="droneNameDisplay">
			<?php echo'Name: '. $db->getFirstName($username)[0] ." ". $db->getLastName($username)[0] ."<br>";
			echo'Contact Information:';
			echo'Email: ' . $db->getEmail($username)[0] ."<br>";
			echo'cost :' . $cost ."$ an hour!"; 			
			?> 
		</div>

		<div class= "slideshow">
			SLIDESHOW
		</div>

	<!--	<div class= "rentBox">
		
			<button class="buttonRent">Rent Now!</button> 
		</div>
		-->

		<div class= "DescriptionBox">
	
			<button class="blueButton">Description</button> 

				<div class ="DescriptionBoxText">
				<?php  
					echo $_SESSION["profileUser"];
					$description = $db->getDescription($username);
					echo nl2br($description[0]);
				?>
			</div>
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