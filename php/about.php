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

<div id="top"> <!--Login/register section-->
	<div id="login">
			<?php include 'login_bar.php'; ?>
    </div><!--END login div-->
</div><!--END Login/register section-->  

<div id="inner_wrapper"> <!--MAIN CONTENT WRAPPER-->

<div id="header">
<div id="logo"><img src="../images/Logo.jpg" /></div>
<div id="navbar">
	<?php include 'nav_bar.php'; ?>
</div>
</div> 

<div id="gallery"><img src="../images/about_head.jpg" /></div>

<div id="content_container">


<!--Start Content section-->

<div class="content_box" id="content_statement">
	<div class="content_title">About the Delicious Home</div>
     <img src="../images/grandmas-kitchen-cristopher-ernest.jpg" />
<p><i>Idea behind the website</i></p>

<p><b>Mission Statement:</b></p>
<p> Provide a web site that facilitates the sharing of recipes among family and friends. This will allow them to strengthen those bonds through the sharing of their favorite and familiar recipes to preserve an integral part of their culture.</p>

<p><b>Audience:</b></p>
<p>The web site will be public and thus will be available to anyone on the internet. But the target audience are groups of people with some common bond, and in most cases that bond will be familial and/or family friends.</p>
</div>

<div class="content_box" id="content_team">
	<div class="content_title">Project Team</div>
	<img src="../images/familyrecipes.jpg" />
     
<p>James Bransford</p>
<p>Jaime DaRosa</p>
<p>Carolyn Persad</p>
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

</div><!--END Main content wrapper-->


</body>


</html>
