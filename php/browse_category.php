<?php
    require 'database.php';

    // Get category ID
    $category_name = $_GET['category'];
   
    // Get products for selected category
    $query = "SELECT * FROM recipes WHERE category_name = '$category_name'";
	$recipes = $db->query($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<!-- the head section -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Delicious Home : <?php echo "Browse ".$category_name; ?></title>

<link href="../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="inner_wrapper"> 

<div id="header">
<div id="logo"><img src="../images/Logo.jpg" /></div>
<div id="navbar">
<ul>
<li><a href="../index.html">Home</a></li>
<li><a href="../html/browse.html">Browse</a></li>
<li><a href="../html/create_recipe.html">Submit</a></li>
<li><a href="../html/about.html">About</a></li>
</ul>
</div>
</div> 

<div id="page">
    <div id="main">

    <h1>Recipe List</h1>
    
   <div id="content">
        <!-- display a table of recipes -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Submitted By</th>
                <th>Steps</th>
                <th>Ingredients</th>
            </tr>

            <?php foreach ($recipes as $recipe) : ?>
            <tr>
                <td><?php echo $recipe['recipe_title']; ?></td>
                <td><?php echo $recipe['recipe_desc']; ?></td>
                <td><?php echo $recipe['user_email']; ?></td>
                <td><?php echo $recipe['recipe_steps']; ?></td>
                <td><?php echo $recipe['ingredients']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </div><!-- end main -->
    <div id="footer"></div>
</div><!-- end page -->
</body>
</html>