<?php 
session_start();
unset($_SESSION['$_usuario']);
session_destroy();
header('location:../login.php');
?>