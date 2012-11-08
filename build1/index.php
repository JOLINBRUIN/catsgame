<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>UCLA CRESST CATS GAME</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">

    <div id="header"><?php include "login-bar.php";?></div>
    
       
	<div id="nav"><?php include "topmenu.php"; ?></div>
	<div class="bottombar"></div>

	<div id="content">
    <?php
	
	$page = $_GET['page'];
	
    if (isset($page))
    {	
	
		if ($page=='register')
		{
			include "register.html";
		}
		else
		{
			if ((empty($_SESSION['SESS_FIRST_NAME'])) && (empty($_SESSION['SESS_LAST_NAME'])))
			{
				echo '<p align="center"> Please Login </p>';
			}
			else
			{
				include "game".$page.".html";
			}
		
	
		}
	}
    else
    {
    
        echo '
    
    <p>&nbsp;</p><h2>Home</h2>
        <p>Be aware that the CSS for these layouts is heavily commented. If you do most of your work in Design view, have a peek at the code to get tips on working with the CSS for the fixed layouts. You can remove these comments before you launch your site. To learn more about the techniques used in these CSS Layouts, read this article at Adobe\'s Developer Center';
        echo '<h2>Introduction</h2>
        <p>Since this is a one-column layout, the .content is not floated. If you add a .footer within the .container, it will simply follow the .content div. </p>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>';
	}
 ?> 
    <!-- end .content --></div>
<!-- end .container --></div>

</body>
</html>