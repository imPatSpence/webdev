<?php

session_start();

$db_host = "localhost";
$db_name = "aerialheadhunters"
$db_user = "root";
$db_password = "root";

mysql_connect($db_host, $db_user, $db_password) or die("MyQL connection error: " . mysql_error());
mysql_select_db($db_name) or die("MySQL Error: " . mysql_error());

?>