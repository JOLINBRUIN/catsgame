<?php
	session_start();
?>

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

<div class="bottombar"></div>

<p>&nbsp;</p>
    <h2>Registration</h2>
    
    <form id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <table width="500" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th align="right">First Name </th>
      <td><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th align="right">Last Name </th>
      <td><input name="lname" type="text" class="textfield" id="lname" /></td>
    </tr>
    <tr>
      <th align="right" width="124">Login</th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th align="right">Password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th align="right">Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
    <tr><td colspan="2"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		echo '<p>'. $_SESSION['ERRMSG_ARR'] .'</p>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></td></tr>
  </table>
</form>
  
    <!-- end .content --></div>
<!-- end .container --></div>
</body>
</html>