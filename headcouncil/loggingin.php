<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$grno = $mysqli->escape_string($_POST['grno']);
$result = $mysqli->query("SELECT * FROM users WHERE grno='$grno'");

if ($result->num_rows == 0) { // User doesn't exist
    $_SESSION['message'] = "Voter with that GR.NO doesn't exist!";
    header("location: error.php");
} else {
    // User exists
    $user = $result->fetch_assoc();
    if ($user['headc'] == "true") {
        // User eligible for head council voting
        $_SESSION['grno'] = $user['grno'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: vote.php");
    }
    else{
        $_SESSION['message'] = "Sorry you are not registered to cast your vote!";
    header("location: error.php");
    }
}
