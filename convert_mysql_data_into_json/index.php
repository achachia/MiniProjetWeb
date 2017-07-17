<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Convert MySQL Rows Into JSON in PHP</title>
<style type="text/css">
h2{
	font-family:Verdana, Geneva, sans-serif;
	font-size:20px;
}
a{
	
	text-decoration:none;
	color:#00a2d1;
}
</style>
</head>

<body>

<h2>
<a href="http://www.codingcage.com/2016/04/how-to-convert-mysql-rows-into-json.html" target="_blank">Convert MySQL Rows Into JSON in PHP - Coding Cage</a>
</h2><hr />


<?php

	require_once 'dbconfig.php';
	
	$query = "SELECT * FROM tbl_users_1";
	
	$stmt = $DBcon->prepare($query);
	$stmt->execute();
	
	$userData = array();
	
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		
		$userData['AllUsers'][] = $row;
		
	}
	
	echo json_encode($userData);

?>


</body>
</html>