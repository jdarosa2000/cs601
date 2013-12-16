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
	   echo "<li><a href='register.php'>Register</a></li>";
	}
?>
<li><a href="about.php">About</a></li>

</ul>
</div>
</div> 
    <form action="login_user.php" method="post">
     
        <?php
			if (isset ($_GET['status'])) {
				$status = $_GET['status'];
				
				if ($status == "invalid_login") {
					echo "<h2>Invalid login. Please enter the correct credentials.</h2>";
				}
				if ($status == "registered") {
					echo "<h2>User succesfully registered. Please log in.</h2>";
				}
			} else {
				echo "<h2>Log In</h2>";
			}
			
		?>
        User Email: <input type="text" name="email"/><br/>
        Password: <input type="password" name="password"/><br/>
        <input type="submit" value="Log in!"/>
    </form>
    </body>
</html>