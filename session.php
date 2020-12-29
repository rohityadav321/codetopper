<?php

session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_unset($_SESSION['user']);
    session_destroy();
    header("location: index.php");
    session_abort();
}
?>