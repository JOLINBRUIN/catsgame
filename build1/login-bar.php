<?php 

session_start();


if ( empty($_SESSION['SESS_FIRST_NAME']))
{
	echo '<p>&nbsp;&nbsp;<a href="login-form.php">Please Login</a></p>';
}
else
{

echo '<p>logged in as '. $_SESSION['SESS_FIRST_NAME']." ".$_SESSION['SESS_LAST_NAME']."  ".'<a href="member-index.php">Profile</a>'."  ".'<a href="logout.php">Log Out</a>'.'</p>';
}

?>