<?php
	
	$DBhost = "localhost";
	$DBuser = "megacour_user";
	$DBpass = "7130chachia";
	$DBname = "megacour_dev";
	
	try{
		
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $ex){
		
		die($ex->getMessage());
	}