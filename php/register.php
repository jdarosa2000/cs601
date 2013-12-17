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
		  window.location.href="login.php?status=registered";
	  } else {
      	ajaxDisplay.innerHTML = ajaxRequest.responseText;
	  }
   }
 }
 
 // Now get the value from user and pass it to
 // server script.
 var name = document.getElementById('name').value;
 var email = document.getElementById('email').value;
 var password = document.getElementById('password').value;
 var confirm_password = document.getElementById('confirm_password').value;
 
 var queryString = "?email=" + email ;
 queryString +=  "&name=" + name;
 queryString +=  "&password=" + password;
 queryString +=  "&confirm_password=" + confirm_password;
 ajaxRequest.open("GET", "register_user.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}


//-->
</script>

<div id="top"> <!--Login/register section-->
	<div id="login">
			<?php include 'login_bar.php'; ?>
    </div><!--END login div-->
</div><!--END Login/register section-->  

<div id="inner_wrapper"> 

<div id="header">
<div id="logo"><img src="../images/Logo.jpg" /></div>
<div id="navbar">
	<?php include 'nav_bar.php'; ?>
</div>
</div> 
    <form name="register">
        <b>Name:</b><br />
        <input type="text" id="name" /><br />
        <b>Email:</b><br />
        <input type="text" id="email" /><br />
        <b>Password:</b><br />
        <input type="text" id="password" /><br />
        <b>Confirm Password:</b><br />
        <input type="text" id="confirm_password" /><br />
        <input type="button" value="Register" onclick='validateUser()'/>
     </form>
      <div id='ajaxDiv'></div>
    </body>
</html>