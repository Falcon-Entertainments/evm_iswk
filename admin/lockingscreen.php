<?php 
    if ($_SESSION['logged_admin'] != 1) {
        $_SESSION['message'] = "Hello there, Sign in and start managing your Admin Dashboard of Falcon";
        header("location: login.php");
    }
    session_start();
    setcookie("lock_adm", "locked" , time()+30*24*60*60);
    $_SESSION['pass'] = null;
    $_SESSION['message'] = "Hey! Unlock Your Screen.";
    header("location: screenlock.php"); 
?>