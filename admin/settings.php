<?php
    session_start();

    if ((isset($_SESSION['logged_admin']) != 1)  && ($_COOKIE['logged_admin'] != 1)) {
        $_SESSION['message'] = "Hello there, Sign in and start managing your Admin Dashboard of Falcon";
        header("location: login.php");
    }
    else if(($_COOKIE['logged_admin'] == 1) && (isset($_SESSION['logged_admin'])  != 1)){
        $username = $_COOKIE['email'];
        $result = $mysqli->query("SELECT * FROM admins WHERE email='$username'");
        $user = $result->fetch_assoc();
        if($_COOKIE['lock_adm'] == "unlocked"){
            $_SESSION['pass'] = $user['password'];
        }
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username1'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['logintime'] = date("h : i  a");
        $_SESSION['con'] = $_SERVER['SERVER_ADDR'];
        $_SESSION['port'] = $_SERVER['SERVER_PORT'];
        $_SESSION['logged_admin'] = true;

        $usersettings = $mysqli->query("SELECT * FROM usersettings WHERE username='$username' OR email='$username'");
        $settings = $usersettings->fetch_assoc();
        $_SESSION['backgroundimg'] = $settings['bg'];
        $_SESSION['headercolour'] = $settings['hc'];
        $_SESSION['logobgcolour'] = $settings['lc'];
        $_SESSION['sidebarcolor'] = $settings['sc'];
        $_SESSION['chatbg'] = $settings['cb'];
    }
    if ($_COOKIE['lock_adm'] == "locked" && $_SESSION['pass'] == null) {
        $_SESSION['message'] = "Hey! Unlock Your Screen.";
        header("location: screenlock.php");
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['unlock'])) { 
            require 'unlockingscreen.php';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['sentmessage'])) { 
            require 'sentingmessage.php';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['register'])) {
            require 'registering.php';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['addcan'])) {
            require 'addcan.php';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['addvoter'])) {
            require 'addvoters.php';
        }
    }
?>