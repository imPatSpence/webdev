<?php
  session_start();
  require_once "../Dao.php";
  $db = new dao();
  $accountName = $_SESSION["authed_user"];

 
  $location = (isset($_POST["location"])) ? $_POST["location"] : "";
  $description = (isset($_POST["description"])) ? $_POST["description"] : "";
  $fileToUpload = $_FILES["fileToUpload"]["name"];
  
  $dest = $_SERVER['DOCUMENT_ROOT'];
  $finalPath= $dest."/userUploads/".$fileToUpload;
  
if ( move_uploaded_file ( $_FILES["fileToUpload"]["tmp_name"], $finalPath ) ){
   
  // echo "Upload Completed";
   $databasePath = "userUploads/".$fileToUpload;
 //  echo $databasePath;
  // echo $accountName;
 //  echo $location;
 //  echo $description;
   $_SESSION["imageUploaded"] = "Sucessfully updated uploaded profile Image!";
   $db->uploadImagePath( $databasePath, $accountName, $location, $description );
   
   header('Location: /../editAccount.php');
}
else {
	$_SESSION["imageUploadedError"] = "Error when uploading profile image!";
	header('Location: /../editAccount.php');
   echo "Error";
}


//TODO: For now, upload with same name and store the name in database with correct username attached

  ?>