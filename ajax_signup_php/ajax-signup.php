<?php

	header('Content-type: application/json');

	require_once 'config.php';
	
	$response = array();

	if ($_POST) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['cpassword'];
		
		// sha256 password hashing
		$password = hash('sha256', $pass);
		
		$stmt = $DB_con->prepare('INSERT INTO users(name,email,password) VALUES(:name, :email, :pass)');
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':pass', $password);
		$stmt->execute();
		
		// check for successfull registration
        if ($stmt->rowCount() == 1) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; registered sucessfully, you may login now';
        } else {
			
            $response['status'] = 'error'; // could not register
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; could not register, try again later';
        }	
	}
	
	
	echo json_encode($response);