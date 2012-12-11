<?php 

session_start();
/*

if ( empty($_SESSION['SESS_FIRST_NAME']))
{
	echo '<div align="right"><a href="index.php?page=register">Register</a> | <a href="index.php?page=login">Log in</a></div>';
}
else
{

echo '<div class="alignleft">Hello '. $_SESSION['SESS_FIRST_NAME']." ".$_SESSION['SESS_LAST_NAME'].'</div><div class="alignright"><a href="member-index.php">Profile</a> | <a href="logout.php">Log Out</a></div>';
}
*/
?>


<div id="menu">
		<div id="menuleft">
			<a href="index.php"><img src="images/logo_small.png" alt="CATS logo" width="44" height="22" /></a>
            <div id="leftitems"> &nbsp;Welcome &nbsp; 
			
			<?php
				//if (!empty($_SESSION['SESS_FIRST_NAME']))
				//{
            		echo $_SESSION['SESS_FIRST_NAME']." ".$_SESSION['SESS_LAST_NAME'];
					
					/*<a href="#" id="loginToggle"></a>*/
	
				//}
			?>
			</div>
			
		</div>
		<div id="menuright">
        	<?php if(empty($_SESSION['SESS_FIRST_NAME']))
				{
        			echo '<a href="index.php?page=login" id="loginToggle">Login</a> | <a href="index.php?page=register" id="loginToggle">Register</a>';
				}
				else
				{
					echo '<a href="index.php?page=logout" id="loginToggle">Log Out</a> | <a href="index.php?page=profile" id="loginToggle">Profile</a>';
				}
			?>
		</div>
</div><!-- end top menu --><div style="clear: both;"></div>   


<p><a href="http://cats.cse.ucla.edu/" class="main-site">CATS Main Site</a></p>

<h1><img src="images/logo.png" alt="CATS" /></h1>

<!-- Beginning of main drop-down menu -->

<ul class="dropdown dropdown-horizontal">
	
	<li><a href="index.php">About</a></li>
	<li><a href="./" class="dir">In-house Games</a>
		<ul>
			<li><a href="index.php?page=1">ExpressO</a></li>
			<li><a href="index.php?page=2">Game2</a></li>
			<li><a href="index.php?page=3">Game3</a></li>
			<li><a href="index.php?page=4">Game4</a></li>
		</ul>
	</li>
	<li><a href="./" class="dir">Technologies</a>
		<ul>
			<li><a href="./">Partner1</a></li>
			<li><a href="./">Partner2</a></li>
			<li><a href="./">Partner3</a></li>
		</ul>
	</li>
	<li><a href="./" class="dir">Other Games</a>
		<ul>
			<li><a href="./">Game1</a></li>
			<li><a href="./">Game2</a></li>
			<li><a href="./">Game3</a></li>
		</ul>
	</li>
	<li><a href="index.php?page=register">Register</a></li>
</ul>

<!-- / END -->

