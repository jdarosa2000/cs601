<?php

	include ("database.php");
	$sql = "SELECT count(*) from users WHERE user_email='" . $_POST['email'] . "'";
	//echo $sql;
	$result = $db->query($sql);
	$count = $result->fetchColumn();
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$psw = $_POST['password'];
	$confirm_psw = $_POST['confirm_password'];

	if($count > 0){
		header('Location: register.php?status=email_exists');
	}
	else if ( $psw != $confirm_psw) {
		header('Location: register.php?status=confirm_password');
	} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    	header('Location: register.php?status=invalid_email');
	} else if ($_POST['name'] == '') {
    	header('Location: register.php?status=user_name');
	}
	else {
		$sql = "INSERT into users VALUES (null, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		//echo "value inserted";
		header('Location: login.php?status=registered');
	}
	
?>