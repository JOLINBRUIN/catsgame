<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css">
<title>Logged Out</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
<div id="header">

<?php include "login-bar.php"; ?>

</div>
  <div class="content">

<?php include "topmenu.php"; ?>

<div class="bottombar"></div>

<h2>&nbsp;</h2>

<p align="center">Click here to <a href="login-form.php">Login</a></p>
<h4 align="center" class="err">You have been logged out.</h4></div>
<!-- end .container --></div>


</body>
</html>
