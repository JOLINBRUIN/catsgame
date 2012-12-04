
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

<div class="container">
    <div id="header"><?php include "login-bar.php";?></div>
    <div style="clear: both;"></div>   
     
    <div id="nav"><?php include "topmenu.php"; ?></div>
    
    <div class="bottombar"></div>
    
    
    <div class="content">
    	<div id="member">
        <h2>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h2>
        
        <a href="member-profile.php">My Profile</a> | <a href="logout.php">Logout</a>
        
        <p>Your session member id is: <?php echo $_SESSION['SESS_MEMBER_ID']; ?></p>
        <p>Your session member first name is: <?php echo $_SESSION['SESS_FIRST_NAME']; ?></p>
        <p>Your session member last name is: <?php echo $_SESSION['SESS_LAST_NAME']; ?></p>
        
        
        <p>This is a password protected area only accessible to members. </p>
        </div>
    <!-- end .content --></div>
<!-- end .container --></div>



</body>
</html>
