<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Profile</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="cookietest.js"></script>
</head>
<body onload="checkCookie()">

<div class="container">
<div id="header"><?php include "login-bar.php"; ?></div>

<div id="nav"><?php include "topmenu.php"; ?></div>

<div class="bottombar"></div>


<div class="content">
<h2>My Profile </h2>
<a href="member-index.php">Home</a> | <a href="logout.php">Logout</a>
<br />
<button onclick="setCookie(test1, 'hello world')">Set Cookie</button>
<button onclick="myFunction('Harry Potter','Wizard')">Try Alert</button>


<p>This is another secure page. </p>

<p>This is a password protected area only accessible to members. </p>
    <!-- end .content --></div>
<!-- end .container --></div>



</body>
</html>
