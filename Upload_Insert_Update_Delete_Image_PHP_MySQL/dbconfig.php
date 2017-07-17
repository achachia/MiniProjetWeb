<?php

	$DB_HOST = 'localhost';
	$DB_USER = 'megacour_user';
	$DB_PASS = '7130chachia';
	$DB_NAME = 'megacour_dev';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
