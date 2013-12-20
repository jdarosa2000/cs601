<?php

	include ("database.php");
	
	$name = $_GET['name'];
	$email = $_GET['email'];
	$psw = $_GET['password'];
	$confirm_psw = $_GET['confirm_password'];
	
	$sql = "SELECT count(*) from users WHERE user_email='" . $email . "'";
	//echo $sql;
	$result = $db->query($sql);
	$count = $result->fetchColumn();
	
	

	if($count > 0){
		//header('Location: register.php?status=email_exists');
		echo "<h2>Email is already registered. Register with a new email.</h2>";
	}
	else if ( $psw != $confirm_psw) {
		//header('Location: register.php?status=confirm_password');
		echo "<h2>Passswords do not match. Please enter the appropriate details.</h2>";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	//header('Location: register.php?status=invalid_email');
		echo "<h2>Email address is not valid. Please enter a valid email address.</h2>";
	} else if ($name == '') {
    	//header('Location: register.php?status=user_name');
		echo "<h2>Please enter a user name.</h2>";
	}
	else {
		$sql = "INSERT into users VALUES (null, '".$name."', '".$email."', '".md5($psw)."')";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		//echo "success";
		header('Location: login.php?status=registered');
	}
	
?>