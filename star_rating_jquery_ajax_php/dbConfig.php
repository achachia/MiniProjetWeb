<?php
//Database configuration
$dbHost = 'localhost';
$dbUsername = 'megacour_user';
$dbPassword = '7130chachia';
$dbName = 'megacour_dev';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_errno):
    die('Connect error:'.$db->connect_error);
endif;
?>