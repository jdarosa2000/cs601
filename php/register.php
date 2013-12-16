<html>
	<head>
    	
        
   </head>
	<body>
    <form action="register_user.php" method="post">

        <?php
			if (isset ($_GET['status'])) {
				$status = $_GET['status'];
				
				if ($status == "email_exists") {
					echo "<h2>Email is already registered. Register with a new email.</h2>";
				} 
				if ($status == "confirm_password") {
					echo "<h2>Passswords do not match. Please enter the appropriate details.</h2>";
				} 
			} else {
					echo "<h2>Register</h2>";
			}
		
		?>
        <b>Name:</b><br />
        <input type="text" name="name" /><br />
        <b>Email:</b><br />
        <input type="text" name="email" /><br />
        <b>Password:</b><br />
        <input type="text" name="password" /><br />
        <b>Confirm Password:</b><br />
        <input type="text" name="confirm_password" /><br />
        <input type="submit" value="Register!" />
     </form>
    </body>
</html>