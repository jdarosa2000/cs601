<?php
	include ("database.php");

	$email = $_GET['user_email'];
	$psw = md5($_GET['user_password']);
	//make sure email is registered
	$sql = "SELECT * from users WHERE user_email='" . $email . "' AND user_password='".$psw."'";
	//echo $sql;
	$result = $db->query($sql);
	$count = $result->fetchColumn();
	//echo $count;
	if($count > 0){
		//session_destroy();
		session_start();
		$_SESSION['email']=$email; //if a match is found create a session
		echo 'success';
		//header('Location: ../index.php');
	}
	else {
   		echo '<h2>Invalid login. Try again</h2>';
		//header('Location: login.php?status=invalid_login');
	}
?> 
