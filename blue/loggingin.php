<?php
/* User login process, checks if user exists and password is correct */

$sett = $mysqli->query("SELECT * FROM settings where activationcode='123456'");
$sett1 = $sett->fetch_assoc();
if($sett1['blueacti'] == '1'){

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
}
else{
    $_SESSION['message'] = "Voting has not been enabled for this house by the authority . Please wait";
    header("location: error.php");
}