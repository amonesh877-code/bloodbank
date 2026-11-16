<?php
$dbHost = "127.0.0.1";
$dbUser = "root";
$dbPassword = "";
$dbName = "bloodbank";
$dbPort = 3306;

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

if (!$conn) {
    die("MySQL connection failed: " . mysqli_connect_error());
}
?>