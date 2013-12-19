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
<div id="inner_wrapper"> 

<div id="header">
<div id="logo"><img src="../images/Logo.jpg" /></div>
<div id="navbar">
<?php include 'nav_bar.php'; ?></div>
</div>
</div> 

<div id="gallery"><img src="../images/submit_head.jpg" /></div>

<div id="content_container">



<div id="form">
<h2>Share All Your Family Secrets!</h2>
<form name="myForm" action="insert_recipe.php" onsubmit="return validateForm()" method="post">
Title: </br> 
</br> <input type="text" name="recipe_title" size="80"> </br>
Description: </br> 
</br> <textarea rows="1" name="recipe_desc" cols="80"></textarea> </br>
Category: </br> 
<br> <select name="category">
          <option value="Pasta">Pasta</option>
          <option value="Fish">Fish</option>
          <option value="Beef">Beef</option>
          <option value="Soup">Soup</option>
          <option value="Appetizer">Appetizer</option>
          <option value="Dessert">Dessert</option>
          <option value="Vegetable">Vegetable</option>
      </select>
</br>    
Ingredients: </br> 
</br> <textarea name="ingredients"rows="10" cols="80"></textarea> </br>
Instructions: </br> 
</br> <textarea name="recipe_instructions"rows="10" cols="80"></textarea> </br>
</br>
</br><input type="submit" value="Submit Recipe"> 
</form>
</div>

<script type="text/javascript">
	
				
	function validateForm()
	{
		var a=document.forms["myForm"]["recipe_title"].value;
		if (a==null || a=="")
		{
			alert("Enter a recipe title");
			return false;
		}
	
		var b=document.forms["myForm"]["recipe_desc"].value;
		if (b==null || b=="")
		{
			alert("Enter a recipe description");
			return false;
		}
    		
		

  		var f=document.forms["myForm"]["recipe_ingredients"].value;
		if (f==null || f=="")
		{
			alert("Enter ingredients");
			return false;
		}
		var e=document.forms["myForm"]["recipe_instructions"].value;
		if (e==null || e=="")
		{
			alert("Enter instructions");
			return false;
		}
		
	}
	
</script>

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

