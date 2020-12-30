<?php
 /* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM admins WHERE username1='$username' OR email='$username'");

if ($result->num_rows == 0) { // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: login.php");
} else { // User exists
    $user = $result->fetch_assoc();

    if (password_verify($_POST['password'], $user['password'])) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username1'];
        $_SESSION['pass'] = $user['password'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['logintime'] = date("h : i  a");
        $_SESSION['con'] = $_SERVER['SERVER_ADDR'];
        $_SESSION['port'] = $_SERVER['SERVER_PORT'];

        $usersettings = $mysqli->query("SELECT * FROM usersettings WHERE username='$username' OR email='$username'");
        $settings = $usersettings->fetch_assoc();
        $_SESSION['backgroundimg'] = $settings['bg'];
        $_SESSION['headercolour'] = $settings['hc'];
        $_SESSION['logobgcolour'] = $settings['lc'];
        $_SESSION['sidebarcolor'] = $settings['sc'];
        $_SESSION['chatbg'] = $settings['cb'];

        // Setting a cookie username imp
        setcookie("username", $_SESSION['username'] , time()+30*24*60*60);
        setcookie("email", $_SESSION['email'] , time()+30*24*60*60);
        setcookie("logged_admin", true , time()+30*24*60*60);
        setcookie("lock_adm", "unlocked" , time()+30*24*60*60);

        // This is how we'll know the user is logged in
        $_SESSION['logged_admin'] = true;

        header("location: index.php");
    } else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: login.php");
    }
}
 