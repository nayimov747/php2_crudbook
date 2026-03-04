<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "db2_crudbook";

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) {
	die("Something went wrong");
}
