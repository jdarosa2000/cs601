<?php

if (isset($_POST["email"])) {
  setcookie("email", $_POST["email"], null ,"/"); 
  header ("Location: login.php");
  }
  
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
<li><a href="../php/submit_recipe.php">Submit</a></li>
<li><a href="about.php">About</a></li>
<?php
	if (isset($_COOKIE["email"]))
	{
	  echo "<li>Welcome <br>" . $_COOKIE["email"] . "!</li>";
	  echo "<li><a href=\"logout.php\">Logout</a></li>";
	}
	else
	{
	   echo "<li><a href=\"login.php\">Login</a></li>";
	   echo "<li><a href=\"register.php\">Register</a></li>";
	}
?>


</ul>
</div>
</div> 


<div id="gallery">
<img src="../images/cover1.jpg" />
</div>

<form action="../index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 
