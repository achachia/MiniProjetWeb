<?php

	$db_hostname = "localhost";
	$db_user = "megacour_user";
	$db_password = "7130chachia";
	$db_name = "megacour_dev";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_hostname};dbname={$db_name}",$db_user,$db_password);
		
	}catch(PDOException $x){
		
		die($x->getMessage());
	}
