<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Delicious Home</title>

<link href="../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="inner_wrapper"> 

<div id="header">
<div id="logo"><img src="../images/Logo.jpg" /></div>
<div id="navbar">
<ul>
<li><a href="../index.php">Home</a></li>
<li><a href="browse.php">Browse</a></li>
<?php
	if (isset($_SESSION["email"]))
	{
	  echo "<li>Welcome <br>" . $_SESSION["email"] . "!</li>";
	  echo "<li><a href='submit.php'>Submit</a></li>";
	  echo "<li><a href='logout.php'>Logout</a></li>";
	}
	else
	{
	   echo "<li><a href='login.php'>Login</a></li>";
	}
?>
<li><a href="about.php">About</a></li>

</ul>
</div>
</div> 
    <form action="register_user.php" method="post">

        <?php
			if (isset ($_GET['status'])) {
				$status = $_GET['status'];
				
				if ($status == "email_exists") {
					echo "<h2>Email is already registered. Register with a new email.</h2>";
				} 
				if ($status == "confirm_password") {
					echo "<h2>Passswords do not match. Please enter the appropriate details.</h2>";
				}
				if ($status == "invalid_email") {
					echo "<h2>Email address is not valid. Please enter a valid email address.</h2>";
				}
				
				if ($status == "user_name") {
					echo "<h2>Please enter a user name.</h2>";
				}  
			} else {
					echo "<h2>Register</h2>";
			}
		
		?>
        <b>Name:</b><br />
        <input type="text" name="name" /><br />
        <b>Email:</b><br />
        <input type="text" name="email" /><br />
        <b>Password:</b><br />
        <input type="text" name="password" /><br />
        <b>Confirm Password:</b><br />
        <input type="text" name="confirm_password" /><br />
        <input type="submit" value="Register!" />
     </form>
    </body>
</html>