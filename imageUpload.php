<?php require_once 'headernorectangle.php'; 
session_start();
$db = new dao();
$accountName = $_SESSION["authed_user"];
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

  <title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="styles/imageUpload.css">
	 	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

	
  </head>
  <body>
  <?php
	
	//Must be logged in to see this page
	if(!isset($_SESSION["authed_user"])){
		$_SESSION["Unauthorized"] = "Must be logged in to see the previous Page!";
		header('Location: ../login.php');
	}
	?>
	
  <fieldset class = "uploadBox">
  <legend>Upload Photos</legend>
     <form action="scripts/imageUploadHandler.php" method="POST" enctype="multipart/form-data">
        <div>
          <label for="location">Location Taken:</label>
          <input type="text" name="location"/>
        </div>
        <div>
        <label for="description">Description:</label>
        <input type="text" name="description"/>
        </div>
        <div>
          <label for="fileToUpload">Image:</label>
          <input type="file" name="fileToUpload" id="fileToUpload"><br>
		  
          <input type = "submit" class ="blueSubmitButton">
        </div>
	</div>
     </form>
  </body>
  
  <div class="footer">
		<div id="rectangleFooter">
			<?php require_once 'footer.php'; ?>
		</div>
	</div>
</html>