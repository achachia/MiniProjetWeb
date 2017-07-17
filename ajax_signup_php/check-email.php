<?php

	require_once 'config.php';

	if (isset( $_POST['email'] ) && !empty($_POST['email'])) {
		$email = $_POST['email'];
		$query = " SELECT email FROM users where email = :email ";
		$stmt = $DB_con->prepare($query);
		$stmt->execute(array(':email'=>$email));
		
		if ($stmt->rowCount() == 1) {
			echo 'false'; // email already taken
		} else {
			echo 'true'; 
		}
	}