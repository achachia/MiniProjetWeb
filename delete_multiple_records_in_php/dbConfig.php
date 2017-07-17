<?php
$dbHost = 'localhost';
$dbUser = 'megacour_user';
$dbPass = '7130chachia';
$dbName = 'megacour_dev';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>