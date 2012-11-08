<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>UCLA CRESST CATS GAME</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>


<div class="container">
<div id="header">

<?php include "login-bar.php"; ?>

</div>
  <div class="content">

<?php include "topmenu.php"; ?>

<?php 

if ( empty($_SESSION['SESS_FIRST_NAME']))
{
	echo '<p>&nbsp;</p><p align="center"><a href="login-form.php">Please Login</a></p>';
}
else
{
	include "game1.html";
}
</body>
</html>