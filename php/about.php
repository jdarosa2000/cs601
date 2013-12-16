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
	   echo "<li><a href='register.php'>Register</a></li>";
	}
?>
</ul>
</div>
</div> 


<div id="gallery">
<img src="../images/cover1.jpg" />
</div>


<div class="content_box" id="recipe_day">
	<div class="content_title">About the Delicious Home</div>
     <img src="../images/grandmas-kitchen-cristopher-ernest.jpg" />
<p><i>Idea behind the website</i></p>

<p><b>Mission Statement:</b></p>
<p> Provide a web site that facilitates the sharing of recipes among family and friends. </p>
<p> This will allow them to strengthen those bonds through the sharing of their favorite </p>
<p> and familiar recipes to preserve an integral part of their culture.</p>

<p><b>Audience:</b></p>
<p> The web site will be public and thus will be available to anyone on the internet.</P>
<p> But the target audience are groups of people with some common bond, </p>
<p> and in most cases that bond will be familial and/or family friends. </p>


<div class="content_box" id="content_main">
	<div class="content_title">Project Team</div>
	<img src="../images/familyrecipes.jpg" />
     
<p> Should we add individual photos to make it more personal? </>	 
<p>James Bransford</p>
<p>Jaime DaRosa</p>
<p>Carolyn Persad</p>

     

<div id="footer"></div>
</div>


</body>


</html>
