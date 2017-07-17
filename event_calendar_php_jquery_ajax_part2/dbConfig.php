<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'megacour_user';
$dbPassword = '7130chachia';
$dbName = 'megacour_dev';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>