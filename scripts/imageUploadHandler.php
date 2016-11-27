<?php
  // product/upload.php
  require_once "../Dao.php";
  $db = new dao();
  $accountName = $_SESSION["authed_user"];


  $location = (isset($_POST["location"])) ? $_POST["location"] : "";
  $description = (isset($_POST["description"])) ? $_POST["description"] : "";
  $fileToUpload = $_FILES["fileToUpload"]["name"];
  

  $dest = $_SERVER['DOCUMENT_ROOT'];
  $finalPath= $dest."/images/".$fileToUpload;
  
if ( move_uploaded_file ( $_FILES["fileToUpload"]["tmp_name"], $finalPath ) )
   echo "Download completed";
else
   echo "Error";


  ?>