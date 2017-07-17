<?php

$dbHost = 'localhost';
$dbUsername = 'megacour_user';
$dbPassword = '7130chachia';
$dbName = 'megacour_dev';
//connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$sql = "SELECT * FROM skills_2 WHERE skill LIKE '%" . $searchTerm . "%' ORDER BY skill ASC"; 
//echo $sql;
$query = $db->query($sql); 
while ($row = $query->fetch_assoc()) {
    $data[] = $row['skill'];
}
//return json data
echo json_encode($data);
?>