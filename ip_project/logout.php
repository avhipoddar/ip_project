<?php
session_start();
session_unset();
session_destroy();
session_start();
$_SESSION['logout']=true;
$_SESSION['login']=false;
header("location: index.php");
exit;
?>