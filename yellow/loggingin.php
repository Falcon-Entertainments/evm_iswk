<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$grno = $mysqli->escape_string($_POST['grno']);
$result = $mysqli->query("SELECT * FROM users WHERE grno='$grno'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Voter with that GR.NO doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    
        
        $_SESSION['grno'] = $user['grno'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['house'] = $user['house'];
        
          
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: vote.php");
    
}