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
<li><a href="about.php">About</a></li>

</ul>
</div>
</div> 

<div id="gallery">
<img src="../images/cover1.jpg" />
</div>

<center><img src="../images/search_head.jpg" /></center>

<div class="content_cat">
	<div class="content_title" >Desserts</div>
     <a href="../php/browse_category.php?category=Dessert"><img src="../images/dessert_cat.jpg" /></a>
</div>



<div class="content_cat">
	<div class="content_title">Pasta Dishes</div>
   	<a href="../php/browse_category.php?category=Pasta"><img src="../images/pasta_cat.jpg" /></a>
</div>

<div class="content_cat">
	<div class="content_title">Fish</div>
   	<a href="../php/browse_category.php?category=Fish"><img src="../images/fish_cat.jpg" /></a>
</div>

<div class="content_cat">
	<div class="content_title">Beef Dishes</div>
   	<a href="../php/browse_category.php?category=Beef"><img src="../images/beef_cat.jpg" /></a>
</div>

<div class="content_cat">
	<div class="content_title">All Veggies</div>
   	<a href="../php/browse_category.php?category=Vegetable"><img src="../images/veggie_cat.jpg" /></a>
</div>

<div class="content_cat">
	<div class="content_title">Soups</div>
   	<a href="../php/browse_category.php?category=Soup"><img src="../images/soup_cat.jpg" /></a>
</div>

</div>



<div id="footer">

<div id="social_title">
<p>Join the conversation:</p>
</div>

<div id="social">
<a href="http://www.facebook.com"><img src="../images/icons/facebook.png" /></a>
<a href="http://www.pinterest.com"><img src="../images/icons/pinterest.png" /></a>
<a href="http://www.twitter.com"><img src="../images/icons/twitter.png" /></a>
</div>
</div>

</body>


</html>

