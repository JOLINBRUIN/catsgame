<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>CATS Games</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Center for Advanced Technology in Schools Games" />


<!-- Beginning of css code below -->
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/dropdown.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/nvidia.com/default.advanced.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- / END -->
</head>

<?php 

session_start();

?>



<body class="nvidia-com">

 
	<div id="nav"><?php include "header.php"; ?></div>

<div id="content">	
<?php
    
	$page = $_GET['page'];
	
    if (isset($page))
    {	
	
		if ($page=='register')
		{
			include "register.php";
		}
		elseif ($page=='login')
		{
			include "login-form.php";
		}
		elseif ($page=='profile')
		{
			include "member-profile.php";
		}
		elseif ($page=='access-denied')
		{
			include "access-denied.php";
		}		

		elseif ($page=='logout')
		{
			unset($_SESSION['SESS_MEMBER_ID']);
			unset($_SESSION['SESS_FIRST_NAME']);
			unset($_SESSION['SESS_LAST_NAME']);
			unset($_SESSION['SESS_USERNAME']);
			header('Location: index.php');
			//include "login-form.php";
		}
		else
		{
			/*if ((empty($_SESSION['SESS_FIRST_NAME'])) && (empty($_SESSION['SESS_LAST_NAME'])))
			{
				echo '<p align="center"> Please Login </p>';
			}
			else
			{
				include "game".$page.".html";
			}*/
		include "game".$page.".html";
	
		}
	}
    else
    {
    
        echo '
    
    <p>The mission of the Center for Advanced Technology in Schools (CATS) is to conduct high-quality research, development, assessment, and evaluation of games and other advanced technologies intended to improve learning. Through knowledge dissemination and addressing key issues in the development and measurement of learning technologies, CATS will significantly contribute to setting the national research and development (R&D) agenda in learning games and simulation, and other advanced technology platforms to support future learning.</p>
    
    <p>Most students today are extremely engaged in games and technology. Our team wants to create new ways for transforming that inherent technology motivation into stronger academic achievement. As a first step, the research team plans to design challenging and motivating games that require both basic and advanced mathematical reasoning. Our game development is focused at this time on testbed development for experimental verification of instructional and game variables.</p>
    
    <p>Assisted by a number of national faculty experts, the center is conducting initial experimental research on two-dimensional games to examine how reasoning, practice, and feedback affect student learning in mathematics.</p>';
	}?> 
    
</div>

</body>
</html>