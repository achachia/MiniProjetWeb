<?php

	define('DBhost', 'localhost');
	define('DBuser', 'megacour_user');
	define('DBPass', '7130chachia');
	define('DBname', 'megacour_dev');
	
	try{
		
		$DB_con = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	}catch(PDOException $e){
		
		die($e->getMessage());
	}