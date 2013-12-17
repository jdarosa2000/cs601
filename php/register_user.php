<?php

	include ("database.php");
	$sql = "SELECT count(*) from users WHERE user_email='" . $_POST['email'] . "'";
	//echo $sql;
	$result = $db->query($sql);
	$count = $result->fetchColumn();
	
	//echo $count;

	if($count > 0){
		header('Location: register.php?status=email_exists');
	}
	else if ( $_POST['password'] != $_POST['confirm_password']) {
		header('Location: register.php?status=confirm_password');
	} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    	header('Location: register.php?status=invalid_email');
	} else if (!isset($_POST[user_name])) {
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