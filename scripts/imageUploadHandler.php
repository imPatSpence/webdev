<?php
  // product/upload.php
  require_once "../Dao.php";
  $db = new dao();
  $accountName = $_SESSION["authed_user"];

  // save a product, including name, description, and an image path
  $location = (isset($_POST["location"])) ? $_POST["location"] : "";
  $description = (isset($_POST["description"])) ? $_POST["description"] : "";
  $fileName = $_FILES["file"]["location"];
  
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


if (move_uploaded_file($_FILES["fileToUpload"]["file"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  
  ?>