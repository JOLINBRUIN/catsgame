<?php 

session_start();


if ( empty($_SESSION['SESS_FIRST_NAME']))
{
	echo '<div align="right"><a href="index.php?page=register">Register</a> | <a href="index.php?page=login">Log in</a></div>';
}
else
{

echo '<div class="alignleft">Hello '. $_SESSION['SESS_FIRST_NAME']." ".$_SESSION['SESS_LAST_NAME'].'</div><div class="alignright"><a href="member-index.php">Profile</a> | <a href="logout.php">Log Out</a></div>';
}

?>