<?php 
session_start();
session_destroy();
setcookie("un",$_SESSION['login_user'],time()-1);
header('location:index.php');
?>