<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "wellness4all";
 
// create connection with database
$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Verify connectivity
if(!$connection) {
	die("Connection failed: ".mysqli_connect_error());
}