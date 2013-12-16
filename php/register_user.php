<?php

	include ("database.php");
	$sql = "SELECT count(*) from users WHERE user_email='" . $_POST['email'] . "'";
	//echo $sql;
	$result = $db->query($sql);
	$count = $result->fetchColumn();
	
	//echo $count;

	if($count > 0){
		echo "Email is already in use";
		header('Location: registration_error.php?status=email_exists');
	}
	else if ( $_POST['password'] != $_POST['confirm_password']) {
		echo "Confirm passwords";
		header('Location: registration_error.php?status=confirm_password');
	} else {
		$sql = "INSERT into users VALUES (null, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		//echo "value inserted";
		header('Location: login.php?status=registered');
	}
	
?>