<?php
$con=mysqli_connect("localhost","root","","cs601");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO recipes (recipe_title, recipe_desc, user_email, category_name, recipe_steps, ingredients)
VALUES
('$_POST[recipe_title]','$_POST[recipe_desc]', '$_POST[recipe_user]','$_POST[category]','$_POST[recipe_instructions]','$_POST[ingredients]')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?> 
