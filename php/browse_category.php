<?php

	session_start();

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


<div id="gallery"><center><img src="../images/bg_fruit.png" /></center></div>

<div id="content_container"> 

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

            </tr>

            <?php foreach ($recipes as $recipe) : ?>
            <tr>
                <td>
                	<a href=<?php echo "../php/view_recipe.php?category=" . $category_name .
						"&recipe_id=" . $recipe['recipeId']; ?>><?php echo $recipe['recipe_title']; ?></a>
                </td>
                <td><?php echo $recipe['recipe_desc']; ?></td>
                <td><?php echo $recipe['user_email']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </div><!-- end main -->
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
