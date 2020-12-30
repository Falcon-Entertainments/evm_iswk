<?php
    $username = $_COOKIE['username'];
    $result = $mysqli->query("SELECT * FROM admins WHERE username1='$username' OR email='$username'");
    $user = $result->fetch_assoc();

    if (password_verify($_POST['pass'], $user['password'])) {
        $_SESSION['pass'] = $user['password'];
        setcookie("lock_adm", "unlocked" , time()+30*24*60*60);
        header("location: index.php");
    }
    else{
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: screenlock.php"); 
    }

?>