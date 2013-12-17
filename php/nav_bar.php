<?php
	//session_start();
	echo '<ul>';
	//if (isset($_SESSION["email"])) {
//		echo "<li>Welcome <br>" . $_SESSION["email"] . "!</li>";
//	}
	//if (basename($_SERVER['PHP_SELF']) != "index.php") {
//		echo '<li><a href="/index.php">Home</a></li>';
//	}
//	if (basename($_SERVER['PHP_SELF']) != "browse.php") {
//		echo '<li><a href="/php/browse.php">Browse</a></li>';
//	}

//	if (basename($_SERVER['PHP_SELF']) != "about.php") {
//		echo '<li><a href="/php/about.php">About</a></li>';
//	}
	//if ((basename($_SERVER['PHP_SELF']) != "login.php") and (!isset($_SESSION["email"]))){
//		echo '<li><a href="/php/login.php">Login</a></li>';
//	}
//	if (isset($_SESSION["email"])) {
//		echo '<li><a href="/php/logout.php">Logout</a></li>';
//	} 
//	if ((basename($_SERVER['PHP_SELF']) != "register.php") and (!isset($_SESSION["email"]))){
//		echo '<li><a href="/php/register.php">Register</a></li>';
//	}
	echo '<li><a href="/index.php">Home</a></li>';
	echo '<li><a href="/php/browse.php">Browse</a></li>';
	if ((basename($_SERVER['PHP_SELF']) != "submit.php") and (isset($_SESSION["email"]))) {
		echo '<li><a href="/php/submit.php">Submit</a></li>';
	}
	echo '<li><a href="/php/about.php">About</a></li>';
	
	echo '</ul>';
?>
