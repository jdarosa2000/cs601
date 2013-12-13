<?php
$con=mysqli_connect("localhost","root","","cs601");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO recipe (recipe_title, recipe_desc, user_email, categoryId, recipe_steps)
VALUES
('$_POST[recipe_title]','$_POST[recipe_desc]', '$_POST[recipe_user]','$_POST[recipe_category]','$_POST[recipe_instructions]')";

/*
$sql = "INSERT INTO `cs601`.`recipe` (`recipeId`, `userId`, `recipe_title`, `recipe_desc`, `recipe_steps`, `categoryId`, `tagId`, `recipe_image`) VALUES (\'1\', \'1\', \'kk\', \'kk\', \'kk\', \'1\', NULL, NULL);";
*/

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?> 
