<html>
	<head><title>Login Page</title></head>
	<body>
    <form action="login_user.php" method="post">
     
        <?php
			if (isset ($_GET['status'])) {
				$status = $_GET['status'];
				
				if ($status == "invalid_login") {
					echo "<h2>Invalid login. Please enter the correct credentials.</h2>";
				}
				if ($status == "registered") {
					echo "<h2>User succesfully registered. Please log in.</h2>";
				}
			} else {
				echo "<h2>Log In</h2>";
			}
			
		?>
        User Email: <input type="text" name="email"/><br/>
        Password: <input type="password" name="password"/><br/>
        <input type="submit" value="Log in!"/>
    </form>
    </body>
</html>