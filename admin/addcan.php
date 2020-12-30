<?php

// Escape all $_POST variables to protect against SQL injections
$caname = $mysqli->escape_string(strtoupper($_POST['caname']));
$canpost = $mysqli->escape_string($_POST['canpost']);
$house = $mysqli->escape_string($_POST['house']);
$enc = $mysqli->escape_string( md5( rand(0,1000) ) );;
$canimg = $mysqli->escape_string($_POST['canimg']);

// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM candidates WHERE img='$canimg' AND post='$canpost'") or die($mysqli->error());

if ($result->num_rows > 0) {

    $_SESSION['message'] = 'Candidate with this image and post already exists!';
    header("location: error.php");
} else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO candidates (name, post, house, img, enc) "
        . "VALUES ('$caname','$canpost','$house','$canimg','$enc')";

    // Add user to the database
    if ($mysqli->query($sql)) {

        header("location: addcandidate.php");
    } else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}

