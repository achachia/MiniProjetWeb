<?php
$servername = "localhost";
$username = "megacour_user";
$password = "7130chachia";
$dbname = "megacour_dev";
$limit = 2;

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
?> 
