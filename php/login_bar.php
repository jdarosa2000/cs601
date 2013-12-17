<?php
	if (isset($_SESSION["email"]))
	{
	  echo "<li>Welcome " . $_SESSION["email"] . "!</li>";
	  echo "<li><a href=\"/php/logout.php\">Logout</a></li>";

	}
	else
	{
	   echo "<li><a href=\"/php/login.php\">Login</a></li>";
	   echo "<li><a href=\"/php/register.php\">Register</a></li>";
	}
?>
