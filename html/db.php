<?php

$DB_HOST = "db";
$DB_USER = "MYSQL_USER";
$DB_PASSWORD = "MYSQL_PASSWORD";
$DB_NAME = "MYSQL_DATABASE";

$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

if ($conn) {
	session_start();
} else{
	die("Connection failed: " . mysqli_connect_error());
}

?>