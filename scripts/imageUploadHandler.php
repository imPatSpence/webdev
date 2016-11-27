<?php
  // product/upload.php
  require_once "../Dao.php";
  $db = new dao();
  $accountName = $_SESSION["authed_user"];

  // save a product, including name, description, and an image path
  $location = (isset($_POST["location"])) ? $_POST["location"] : "";
  $description = (isset($_POST["description"])) ? $_POST["description"] : "";
  $fileName = $_FILES["file"]["location"];
  
  $target_dir = "/images";

  
  $dest = $_SERVER['DOCUMENT_ROOT'];
  $finalPath= $dest.$target_dir.$fileName;
  
if ( move_uploaded_file ( $_FILES["fileToUpload"]["tmp_name"], $finalPath ) )
   echo "Download completed";
else
   echo "Error";

//move_uploaded_file ($_FILES['fileToUpload'] ['tmp_name'], 
 //      "/uploads/{$_FILES['fileToUpload'] ['name']}")

  ?>