<?php
	
	if (isset($_GET['status'])) {
		$status = $_GET['status'];
		echo $status;
		if ($status == 'email_exists') {
			header( 'Location: register.php?status=' . $status ); 
		} 
		if ($status == 'confirm_password') {
			header( 'Location: register.php?status=' . $status ); 
		} 
	}

?>