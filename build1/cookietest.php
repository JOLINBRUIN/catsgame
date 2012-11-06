<?php
setcookie('test', 1, time()+3600);
if(!isset($_GET['cookies'])){
    header('Location:/login-form.php?cookies=true');
}
if(count($_COOKIE) > 0){
    echo "Cookies are yummy!";
} else {
    echo "You didn't bring any cookies here. We are hungry!";
}
?>