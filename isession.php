<?php

session_start();

if (!isset($_SESSION['institute'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ilogin.php');
}
if (isset($_GET['logout'])) {
    session_unset($_SESSION['institute']);
    session_destroy();
    header("location: index.php");
    session_abort();
}
?>