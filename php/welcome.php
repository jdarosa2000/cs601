<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"] . "!<br>";?>

<?php
setcookie("email", $_POST["email"], null ,"/");

if (isset($_COOKIE["email"]))
  echo "Welcome " . $_COOKIE["email"] . "!<br>";
else
  echo "Welcome guest!"."<br>";
?>
</body>
</html> 