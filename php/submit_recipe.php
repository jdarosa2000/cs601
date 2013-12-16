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
<li><a href="submit_recipe.php">Submit</a></li>
<li><a href="about.php">About</a></li>
<?php
	if (isset($_SESSION["email"]))
	{
	  echo "<li>Welcome <br>" . $_SESSION["email"] . "!</li>";
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

<div id="form">
<form name="myForm" action="../php/insert.php" onsubmit="return validateForm()" method="post">
Title: </br> 
</br> <input type="text" name="recipe_title" size="80"> </br>
Description: </br> 
</br> <textarea rows="2" name="recipe_desc" cols="80"></textarea> </br>
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
User: </br> 
</br> <input type="text" name="recipe_user" size="80"> </br>
Ingredients: </br> 
</br> <textarea name="ingredients"rows="20" cols="80"></textarea> </br>
Instructions: </br> 
</br> <textarea name="recipe_instructions"rows="20" cols="80"></textarea> </br>
</br>
</br><input type="submit" value="Submit Recipe"> 
</form>
</div>

<script type="text/javascript">
	// $(document).ready(function () {
		// prepare the data
		/*
		var users_source =
		{
			datatype: "json",
			datafields: [
				{ name: 'user_email' },
				{ name: 'user_name' },
			],
			url: '../php/users.php'
		};
		var usersDataAdapter = new $.jqx.dataAdapter(users_source);
		
		$("#users_listbox").jqxDropDownList(
		{
			source: usersDataAdapter,
			theme: 'classic',
			width: 200,
			height: 25,
			selectedIndex: 1,
			displayMember: 'user_email',
			valueMember: 'user_email'
		});
		
		*/
		
		/*
		// bind dropdown list to 'select' event.
		$('#users_listbox').bind('select', function (event) {
			var args = event.args;
			var selected_user = $('#users_listbox').jqxDropDownList('getItem', args.index);
			alert('Selected: ' + selected_user.value);
		});
		*/
		
		/*
		var categories_source =
		{
			datatype: "json",
			datafields: [
				{ name: 'category_name' },
				{ name: 'categoryId' },
			],
			url: '../php/categories.php'
		};
		var catgoriesDataAdapter = new $.jqx.dataAdapter(categories_source);
		
		$("#categories_listbox").jqxDropDownList(
		{
			source: catgoriesDataAdapter,
			theme: 'classic',
			width: 200,
			height: 25,
			selectedIndex: 1,
			displayMember: 'category_name',
			valueMember: 'categoryId'
		});
		*/
				
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
    		
		var d=document.forms["myForm"]["recipe_user"].value;
		if (d==null || d=="")
		{
			alert("Enter a user name");
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
</body>
</html>
