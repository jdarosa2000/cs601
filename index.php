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


<div id="inner_wrapper"> 

    <div id="header">
        <div id="logo"><img src="images/Logo.jpg" /></div>
        <div id="navbar">
			<ul>
			  <li><a href="index.php">Home</a></li>
            <li><a href="php/browse.php">Browse</a></li>
  			<?php
                if (isset($_SESSION["email"]))
                {
                  echo "<li>Welcome <br>" . $_SESSION["email"] . "!</li>";
				  	echo "<li><a href='php/submit.php'>Submit</a></li>";
                  echo "<li><a href='php/logout.php'>Logout</a></li>";
                }
                else
                {
                   echo "<li><a href='php/login.php'>Login</a></li>";
                   echo "<li><a href='php/register.php'>Register</a></li>";
                }
            ?>
            <li><a href="php/about.php">About</a></li>
        	</ul>
    </div>
</div> 

<div id="gallery">
<img src="images/cover1.jpg" />
</div>

<div class="content_box" id="recipe_day">
	<div class="content_title">Recipe Of The Day</div>
     <img src="images/pasta_salad.jpg" />
<p><i>Pasta Salad</i></p>

<p><b>Ingredients</b></p>
<p> Salt </p>
<p> 1 tablespoon olive oil </p>
<p> 3 tablespoon unsalted butter </p>
<p> 1 cup of chopped tomatoes  </p>
<p> 1 cup chopped bell peppers</p>
<p> 3 cups Rotini pasta</p>

<p> <b>Directions</b></p>
<p> Bring a large pot of salted water to a boil.  Add pasta and cook for 7 minutes, then drain. </p> 
<p> Heat the olive oil and 1 tablespoon butter in a large skillet over medium-high heat. </tr>
<p> Add the tomatoes and bell peppers stirring, until soft, about 4 minutes.</tr>
<p> Toss tomatoes and peppers in with the pasta, add 2 tablespoons of butter and salt to taste</p>

</div>

<div class="content_box" id="content_main">
	<div class="content_title">Current Cooking and Food Events</div>

<p>Cooking show at the Boston Convention Center on Dec 19th at 2:00 pm<p>
<p>Restaurant Week in Boston from December 1 - Dec 31st


<div class="content_box" id="content_main">
	<div class="content_title">Cooking Tips by some Famous chefs</div>
<p>1. Brine, baby, brine! Ya gotta brine that poultry to really give it the super flavor.</p>
<p>Guy Fieri, Diners, Drive-ins and Dives	</p>
<p>2. Store spices in a cool, dark place, not above your stove. Humidity, light and heat will cause herbs and spices to lose their flavor. </p>
<p>Rick Tramonto, Tramonto's Steak & Seafood, Osteria di Tramonto and RT Lounge, Wheeling, IL</p>


<div class="content_box" id="recipe_day">
	<div class="content_title">Healthy Eating Habits</div>
<p>Tomatoes are a great source of vitamins and anti-oxidants<p>
	
<center><img src="images/Health Benefits Of Tomatoes.jpg" /></center>
      
<div id="footer"></div>


</body>


</html>