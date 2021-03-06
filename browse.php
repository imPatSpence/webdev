
<?php



require_once 'headernorectangle.php';
require_once "dao.php";
session_start();
$db = new dao();
$firstnameSearched = $_GET['firstnames'];
$typeofworkSearched = $_GET['TypeOfWork'];
$droneTypeSearched = $_GET['droneType'];

//Must be logged in to see this page
if(!isset($_SESSION["authed_user"])){
	$_SESSION["Unauthorized"] = "Must be logged in!";
	header('Location: ../login.php');
}
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

  <title>Browse</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/browse.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

 </head>
 <body>
	<fieldset class = "searchbox">
			<legend>Search!</legend>
			<div>
			<form action ="/scripts/browse-formhander.php" method ="POST">
				<ul class= "signupList">

  				<li><label for="fName">Search by first name</label></li>
  				<input type="text" id="fName" name="fName"></li>
  				<br>or by Filter: <br>
  				<!-- Filters -->
  				<select name="TypeOfWork" id="TypeOfWork">
				 	<option selected disabled>Type of Work</option>
					<option value="Housing">Housing</option>
 					<option value="Photography">Photography</option>
 					<option value="Military">Military</option>
					</select>
  				<select name="droneType" id="droneType">
				 	<option selected disabled>Drone Type</option>
					<option value="Quadracopter">Quadracopter</option>
 					<option value="Fixed wing">Fixed Wing</option>
					</select>
				<!-- End Filters -->
  				<input type = "submit" class ="button">
				</form>
				</ul>
				<ul class= "signupList">
				</ul>
						
			<!-- 	<input id="option" type="checkbox" name="field" value="option">
				<label for="option">Value</label>
				<input id="option" type="checkbox" name="field" value="option">
				<label for="option">Value</label>
				<input id="option" type="checkbox" name="field" value="option">
				<label for="option">Value</label>
				<input id="option" type="checkbox" name="field" value="option">
				<label for="option">Value</label>
				<input id="option" type="checkbox" name="field" value="option">
				<label for="option">Value</label>
				<input id="option" type="checkbox" name="field" value="option">
				<label for="option">Value</label> -->
			</div>
			</div>
				<?php
				//Array of IDs that share the same first name
				
				//username that corresponds with id
				//$username = $db->getUsername($fNameID[0]);
				//$firstname = $db->getFirstName($username[0]);
				
				
				echo "<table style=\"width:100%\">";
				echo "<tr>";
				echo "<th>First Name</th>";
				echo "<th>Last Name</th>";
				echo "<th>Type of Work</th>";
				echo "<th>Drone Type</th>";
				echo "<th>Cost $/hr</th>";
				echo "</tr>";

				
				echo "<tr>";

				// echo "<td>".$db->getFirstName($username[0])[0]."</td>";
				// echo "<td>".$db->getLastName($username[0])[0]."</td>";
				// echo "<td></td>";
				// echo "<td></td>";
				// echo "<td>".$db->getCost($username[0])[0]. "</td>";
							
				// echo "</tr>";	

				
				if($firstnameSearched != ""){

					$fNameID = $db->browseFirstName($firstnameSearched);

					foreach ($fNameID as $value ){ 
					//Values should be each ID returned
					$username = $db->getUsername($value[0]);
					echo "<tr>";

					echo "<td> <a href= \" droneProfile.php?page=".$value['id'] ." \" class=\"browselink\"> " . $value['firstname'] . "</td>";
					echo "<td>".$value['lastname']."</td>";
					echo "<td>".$value['typeofwork']."</td>";
					echo "<td>".$value['dronetype']."</td>";
					echo "<td>".$value['cost']."</td>";		
					echo "</tr>";	
					}
				}

				else if($typeofworkSearched != ""){
					$TypeOfWorkReturn = $db->browseByTypeOfWork($typeofworkSearched);

					foreach($TypeOfWorkReturn as $value){
						echo "<td> <a href= \" droneProfile.php?page=".$value['id'] ." \" class=\"browselink\"> " . $value['firstname'] . "</td>";
						echo "<td>".$value['lastname']."</td>";
						echo "<td>".$value['typeofwork']."</td>";
						echo "<td>".$value['dronetype']."</td>";
						echo "<td>".$value['cost']."</td>";		
						echo "</tr>";
					}

				}
				else if($droneTypeSearched != ""){
			
					$droneTypeReturn = $db->browseByDroneType($droneTypeSearched);

					foreach($droneTypeReturn as $value){
						echo "<td> <a href= \" droneProfile.php?page=".$value['id'] ." \" class=\"browselink\"> " . $value['firstname'] . "</td>";
						echo "<td>".$value['lastname']."</td>";
						echo "<td>".$value['typeofwork']."</td>";
						echo "<td>".$value['dronetype']."</td>";
						echo "<td>".$value['cost']."</td>";		
						echo "</tr>";
					}
				}

				?>
			
			
			
	</div>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>
