<?php

$host= "localhost";
$username = "root";
$password = "";
$db="php_project_db";

$con = mysqli_connect($host, $username, $password);
if (!$con){
	die("Connection Error");
}
else {
	//echo "Connection successful";
}

mysqli_select_db( $con, $db);