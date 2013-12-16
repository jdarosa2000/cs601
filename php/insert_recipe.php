<?php
	include ("database.php");
	
	session_start();
	$email = $_SESSION["email"];
	
	$sql="INSERT INTO recipes (recipe_title, recipe_desc, user_email, category_name, recipe_steps, ingredients)
	VALUES
	('$_POST[recipe_title]',
	'$_POST[recipe_desc]', 
	'$email',
	'$_POST[category]',
	'$_POST[recipe_instructions]',
	'$_POST[ingredients]')"
	;
	
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$recipe_id = $db->lastInsertId(); 
	
	header('Location: view_recipe.php?status=recipe_created&category=' .$_POST[category]. '&recipe_id=' .$recipe_id. '');
	
?> 
