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
 </head>
 <body>
	<?php require_once 'header.php'; ?>

	<div class = "signupbox">
		<h3>Browse</h3>
			<div>
			<form>
				<ul class= "signupList">

  				<li><label for="fName">Search by name</label></li>
  				<input type="text" id="fName" name="fName"></li>
				</form>
				</ul>
				<ul class= "signupList">
				<li>Search by filter</li>
				</ul>
				
				
				<input id="option" type="checkbox" name="field" value="option">
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
				<label for="option">Value</label>
			</div>
			<button class="button" form="form1" value="Submit">Submit</button>
			<div class="searchResultContainer">
			<h1> Results</h1>
			</div>
			
	</div>


	<?php require_once 'footer.php'; ?>

	
 </body>
</html>