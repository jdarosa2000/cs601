<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Delicious Home</title>

<link href="../css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="top"> <!--Login/register section-->
	<div id="login">
			<?php include 'login_bar.php'; ?>
    </div><!--END login div-->
</div><!--END Login/register section-->  

<div id="inner_wrapper"> <!--MAIN CONTENT WRAPPER-->

<div id="header">
<div id="logo"><img src="../images/Logo.jpg" /></div>
<div id="navbar">
	<?php include 'nav_bar.php'; ?>
</div>
</div> 

<div id="gallery"><img src="../images/login_head.jpg" /></div>

<div id="content_container">

<div id="login_form">
    <form name="log_in">
    	<?php
			if (isset ($_GET['status'])) {
				$status = $_GET['status'];
				
				if ($status == "registered") {
					echo "<h2>User succesfully registered. Please log in.</h2>";
				}
			}
		?>

        User Email: <input type="text" id="email"/><br/>
        Password: <input type="password" id="password"/><br/>
        <input type="button" value="Log In" onclick='validateUser()'/> <br/>
    </form>
    <div id='ajaxDiv'></div>
</div>
    
<div id="spacer"></div>  

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

<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function validateUser(){
 var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
	  var rsp = ajaxRequest.responseText;
	  
	  if ( rsp.indexOf("success") != -1) {
		  //alert(ajaxRequest.responseText);
		  window.location.href="../index.php";
	  } else {
      	ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  }
   }
 }
 
 // Now get the value from user and pass it to
 // server script.
 var user_email = document.getElementById('email').value;
 var user_password = document.getElementById('password').value;
 
 var queryString = "?user_email=" + user_email ;
 queryString +=  "&user_password=" + user_password;
 ajaxRequest.open("GET", "login_user.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}


//-->
</script>

    </body>
</html>