<?php
require_once "../dao.php";
session_start();
$db = new dao();

$FromAccountID = $db->getAccountID($_SESSION["authed_user"])[0];
$forProfileID = $_POST["forProfile"];
$theComment = $_POST["comment"];



// echo $forProfileID;
// echo $theComment;
// echo $FromAccountID;

//if there is a comment in box
if(isset($_POST["comment"]) && $_POST["comment"] != ""){	
		$db->setComment($FromAccountID, $forProfileID, $theComment );
	}

header('Location: ../droneProfile.php?page='.$forProfileID);
?>