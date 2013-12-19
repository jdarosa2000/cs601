<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>The Delicious Home</title>

<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<<div id="top"> <!--Login/register section-->
	<div id="login">
			<?php include '/php/login_bar.php'; ?>
    </div><!--END login div-->
</div><!--END Login/register section--> 

<div id="inner_wrapper"> 

<div id="inner_wrapper"> 

    <div id="header">
        <div id="logo"><img src="images/Logo.jpg" /></div>
        <div id="navbar">
			  <?php include 'php/nav_bar.php'; ?>
    </div>
</div> 


<div id="gallery"><img src="images/bg_fruit.png" /></div>

<div id="content_container">

<div class="content_box" id="recipe_day">
	<div class="content_title">Recipe Of The Day</div>
    <img src="images/pesto-pasta-salad.jpg" />
	
    <p><i>Pasta Salad</i></p>

	<p><b>Ingredients</b></p>
	<ul> 
	<li>Salt</li>
	<li>1 tablespoon olive oil</li>
	<li>3 tablespoon unsalted butter</li>
	<li>1 cup of chopped tomatoes</li>
	<li>1 cup chopped bell peppers</li>
	<li>3 cups Rotini pasta</li>
	</ul>
    
    <p><b>Directions</b></p>
    <p> Bring a large pot of salted water to a boil.  Add pasta and cook for 7 minutes, then drain. Heat the olive oil and 1 tablespoon butter in a large skillet over medium-high heat. Add the tomatoes and bell peppers stirring, until soft, about 4 minutes. Toss tomatoes and peppers in with the pasta, add 2 tablespoons of butter and salt to taste </p>
</div>


<div class="content_box" id="content_events">
<div class="content_title">Current Cooking and Food Events</div>
<img src="images/christmas-dinner.jpg" border="0" />
<ul>
	<li><a href="http://www.foodnetwork.com/holiday-central/package/index.html">Holiday Central on the Food Network</a></li>
    <li><a href="http://www.createacook.com/cooking/adults-cooking/date-night-couples-cooking.aspx">Date Night! Cooking for couples.</a></li>
    <li><a href="http://www.bu.edu/foodandwine/culinary-arts/">Boston University Offers Certificate in Culinary Arts.</a></li>
    <li><a href="http://www.bu.edu/foodandwine/registration-manager/catalog.php?action=section&course_section_id=854">Taste of India, with Robyn De Luca</a></li>
    <li><a href="http://www.bu.edu/foodandwine/seminars/pepin-lecture-series/">Pepin Lecture Series.</a></li>
</ul>
</div>

<div class="content_box" id="content_tips">
<div class="content_title">Cooking Tips by some Famous chefs</div>
<img src="images/chef.jpg" border="0" />
<ul>
<li>1. Brine, baby, brine! Ya gotta brine that poultry to really give it the super flavor.</li>
<li>2. Store spices in a cool, dark place, not above your stove. Humidity, light and heat will cause herbs and spices to lose their flavor.</li>
<li>3. Remember, y'all, it’s all about the prep. Take away the stress by doing the prep the night or day before. You'll look like a star.</li>
<li>4. The smaller the item, the higher the baking temperature. For example, I bake mini chocolate chip-toffee cookies at 500 degrees F for only 4 minutes. Perfect end result.</li>
<li>5. If you're cooking for someone important — whether it's your boss or a date — never try a new recipe and a new ingredient at the same time.</li>
</ul>
<p><a href="http://www.foodnetwork.com/chefs/100-greatest-cooking-tips-of-all-time/index.html">Click here for the full Food Network list!</a></p>
</div>


<div class="content_box" id="content_health">
<div class="content_title">Healthy Eating Habits</div>
<img src="images/tomato.jpg" border="0" />
<p>It’s the key to a healthy tomorrow. Get tips on simple, affordable and delicious changes you can make to the way you shop for, cook and eat your meals.</p>
<p><a href="http://www.wholefoodsmarket.com/healthy-eating">Click here for healthy foods resources</a></p>
</div>

</div><!--END CONTENT CONTAINER-->
      
<div id="footer">

<div id="social_title">
<p>Join the conversation:</p>
</div>

<div id="social">
<a href="http://www.facebook.com"><img src="../images/icons/facebook.png" /></a>
<a href="http://www.pinterest.com"><img src="../images/icons/pinterest.png" /></a>
<a href="http://www.twitter.com"><img src="../images/icons/twitter.png" /></a>
</div>
</div><!--END FOOTER-->

</body>

</html>
