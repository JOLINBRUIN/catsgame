<?php
	require_once('auth.php');
?>

<h2>My Profile </h2>

<p>Member ID: <?php echo $_SESSION['SESS_MEMBER_ID'];?></p>
<p>Username: <?php echo $_SESSION['SESS_USERNAME'];?></p>
<p>First Name: <?php echo $_SESSION['SESS_FIRST_NAME'];?></p>
<p>Last Name: <?php echo $_SESSION['SESS_LAST_NAME'];?></p>
<p>change password: </p>


<p>Session ID: <?php echo session_id();?></p>	
<p>This is a password protected area only accessible to members. </p>
    <!-- end .content --></div>
<!-- end .container --></div>



</body>
</html>
