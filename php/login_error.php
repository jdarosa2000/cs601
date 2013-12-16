<?php
	
	if (isset($_GET['status'])) {
		$status = $_GET['status'];
		echo $status;
		if ($status == 'invalid_login') {
			header( 'Location: login.php?status=' . $status ); 
		}
	}

?>