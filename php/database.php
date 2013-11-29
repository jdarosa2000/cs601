<?php 

$conn = mysql_connect ("localhost", "cpersad", "");
if (!$conn) {
  echo "Unable to connect to MySQL server <br>";
  echo "Error ". mysql_error(). " - " . mysql_error ();
  exit;
} 
if (!mysql_select_db ("test")){
  echo "Unable to select database <br>";
  echo "Error ". mysql_errno(). " - " . mysql_error();
  exit;
} 

$sql = "SELECT * from ingredients_new";
$result = mysql_query ($sql, $conn);
if (!result) [
  echo "Unable to execute query <br>";
  echo "Error ". mysql_errno(). " - " . mysql_error ();
  exit;
}

$numrows = mysql_num_rows ($result);
$numcols = mysql_num_fields ($result);

echo <table border=1 \n";
while ($data = mysql_fetch_array($result)){
echo "<tr>";
for (i=0;i<$numcols; $i++)[
  echo "<td>". $data [$i]. "</td>\n";
  }
  echo "</tr>\n";
  }
  echo "</table>\n";>
?>
