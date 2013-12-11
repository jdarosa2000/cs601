<?php
$dbLocalhost = mysql_connect("localhost","root","")
               or die ("Could not connect:" . mysql_error());

mysql_select_db("cs601", $dbLocalhost)
                  or die ("Could not find database:". mysql_error());
				  echo "<h1>Connected To Database 1st db message </h1>";

				  
$dbProdRecords = mysql_query("INSERT INTO recipe VALUES('pumpkin pie title', 'pumpkin pie desc', 'xxx', 1,'yyy','cpersad@bu.edu')",$dbLocalhost)
// or die("Problem writing to table:". mysql_error());
// $dbProdRecords = mysql_query("INSERT INTO recipe VALUES
// ('$_POST[recipe_title]','$_POST[recipe_desc]','$_POST[recipe_steps]','$_POST[categoryId]','$_POST[recipe_image]','$_POST[user_email],'$_POST[recipecol]')",$dbLocalhost)
// or die("Problem writing to table:". mysql_error());

$dbProdRecords = mysql_query("SELECT * from recipe",$dbLocalhost)
or die("Problem reading table:". mysql_error());


while ($rrRecord = mysql_fetch_row($dbRecords)){
 echo "<p>". $arrRecord[recipeId]. "";
 echo $arrRecord[recipe_title]. "";
 echo $arrRecord[recipe_desc]. "";
 echo $arrRecord[recipe_steps]. "</p>";
 }

?>