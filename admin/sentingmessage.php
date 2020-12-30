<?php

// Escape all $_POST variables to protect against SQL injections
$username = $mysqli->escape_string($_SESSION['username']);
$message = $mysqli->escape_string($_POST['message']);
$email = $mysqli->escape_string($_SESSION['email']);
$avatar = $mysqli->escape_string($_SESSION['avatar']);

// active is 0 by DEFAULT (no need to include it here)
$sql = "INSERT INTO messages (autimg, autname, autemail ,message) "
    . "VALUES ('$avatar','$username','$email','$message')";

// Add user to the database
if ($mysqli->query($sql)) {

    header("Location: " . $_SERVER["HTTP_REFERER"]);

} else {
    $_SESSION['message'] = 'Message Failed to sent!';
    header("location: error.php");
}
?>