<?php
//Database credentials
$dbHost = 'localhost';
$dbUsername = 'megacour_user';
$dbPassword = '7130chachia';
$dbName = 'megacour_dev';
//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}
?>
