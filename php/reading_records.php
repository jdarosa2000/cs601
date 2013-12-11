<?php
$dbLocalhost = mysql_connect("localhost","root","")
               or die ("Could not connect:" . mysql_error());

mysql_select_db("cs601", $dbLocalhost)
                  or die ("Could not find database:". mysql_error());
				  echo "<h1>Connected To Database 1st db message </h1>";
				  		  
$dbRecords = mysql_query("SELECT * FROM recipe",$dbLocalhost)
  or die ("Problem reading table:" . mysql_error());
  echo "<h1>Connected To Database 2nd db msg </h1>";
  
$strRecipeTitle = mysql_result($dbRecords,0,"recipe_title");
echo "<p>$strRecipeTitle</p>";

while ($rrRecord = mysql_fetch_row($dbRecords)){
 echo "<p>". $arrRecord[0]. "";
 echo $arrRecord[1]. "";
 echo $arrRecord[2]. "";
 echo $arrRecord[3]. "</p>";
 }
?>