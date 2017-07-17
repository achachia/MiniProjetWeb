<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'megacour_user';
    $dbPassword = '7130chachia';
    $dbName = 'megacour_dev';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM skills WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['name'];
    }
    
    //return json data
    echo json_encode($data);
?>