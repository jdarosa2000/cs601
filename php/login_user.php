<?php
	include ("database.php");

	//make sure email is registered
	$sql = "SELECT * from users WHERE user_email='" . $_POST['email'] . "' AND user_password='" . $_POST['password'] . "'";
	//echo $sql;
	$result = $db->query($sql);
	$count = $result->fetchColumn();
	//echo $count;
	if($count > 0){
		//session_destroy();
		session_start();
		$_SESSION['email']=$_POST["email"]; //if a match is found create a session
		header('Location: ../index.php');
	}
	else {
   		header('Location: login_error.php?status=invalid_login');
	}
?> 
