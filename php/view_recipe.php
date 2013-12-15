<?php
    require 'database.php';

    // Get category ID
    $recipe_id = $_GET['recipe_id'];
	$category_name = $_GET['category'];
   
    // Get products for selected category
    $query = "SELECT * FROM recipes WHERE recipeId = '$recipe_id'";
	$stmnt = $db->prepare($query);
	$stmnt->execute();
	$recipe = $stmnt->fetch();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- the head section -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Delicious Home : <?php echo "View Recipe: " . $recipe['recipe_title'] ?></title>

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
<li><a href="create_recipe.php">Submit</a></li>
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

<div id="page">
    <div id="main">

    <h1><?php echo $category_name; ?></h1>
    	Title: </br> 
        </br> <input type="text" size="80" value=<?php echo $recipe['recipe_title']; ?> readonly> </br>
        Description: </br> 
        </br> <textarea readonly rows="2" cols="80"><?php echo $recipe['recipe_desc']; ?></textarea> </br>
        User: </br> 
        </br> <input type="text" size="80" readonly="readonly" ?php value=<?php echo $recipe['user_email']; ?>> </br>
        Ingredients: </br> 
        </br> <textarea readonly rows="20" cols="80"><?php echo $recipe['ingredients']; ?></textarea> </br>
        Instructions: </br> 
        </br> <textarea readonly rows="20" cols="80"><?php echo $recipe['recipe_steps']; ?></textarea> </br>

   
    </div><!-- end main -->
    <div id="footer"></div>
</div><!-- end page -->
</body>
</html>