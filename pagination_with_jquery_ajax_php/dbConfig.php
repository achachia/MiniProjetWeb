<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "megacour_user";
$dbPassword = "7130chachia";
$dbName = "megacour_dev";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>