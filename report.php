<?php
session_start();
$_SESSION['loading']='yes';
// session_start();
// if(isset($_POST['submit'])){
//     if($_POST['pass']==$pair){
//         $_SESSION['login']= TRUE;
//         $URL = $_SESSION['RedirectKe'];
//         header('location:'.$URL.'');
//     }
// }       
if(isset($_GET['Message'])){
	print '<script type="text/javascript">alert("'.$_GET['Message'].'");</script>';
}

?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

	<title>login for roaster</title>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />      
		<link rel="stylesheet" href="logincss.css"/>           
 
<script type="text/javascript">
if(!navigator.cookieEnabled) {
	alert("Cookies are disabled in your browser. " +
	      "You must enable cookies to use this application.");
	}  
</script>	           	
</head>
<body>
	<nav>
      <a href="index.html">Home</a>
      <a href="index.html#Register">Register</a>
      <a href="index.html#Location">Location</a>
      <a href="index.html#contact">Contact</a>
    </nav>
	 <div class="fullscreen-bg">
<h1>Login to view the Roaster Report</h1>

<div>

<form method="post" 
      action="process_login.php"
      name="login">
      <div class="bordr">
<p>
Enter Password: <br/>
<input type="password" name="password" id="password"/><br />
</p>


<input type="reset" value="Clear" />
<input type="submit" name="submit" value="Log In" />
</div>


</form>
</div>
<script type="text/javascript">
document.login.user.focus();
</script>
</div>
</body>
</html>