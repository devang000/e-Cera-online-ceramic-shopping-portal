<?php
session_start();
$_SESSION['user']=$_SESSION['user'];
// echo $_SESSION['class'];
 //echo $_GET['name'];
 //echo $_GET['test'];

 session_destroy();
 unset($_SESSION['user']);

    header("location:./login_page.php");

?>
