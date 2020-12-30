<?php

// Escape all $_POST variables to protect against SQL injections
$username = $mysqli->escape_string(strtoupper($_POST['username']));
$grno = $mysqli->escape_string($_POST['grno']);
$headc = $mysqli->escape_string($_POST['headc']);
$class = $mysqli->escape_string(strtoupper($_POST['class']));
$section = $mysqli->escape_string(strtoupper($_POST['section']));
$dob = $mysqli->escape_string($_POST['dob']);

// Check if user with that grno already exists
$result = $mysqli->query("SELECT * FROM users WHERE grno='$grno'") or die($mysqli->error());

// We know user grno exists if the rows returned are more than 0
if ($result->num_rows > 0) {

    $_SESSION['message'] = 'voter with this grnos already exists!';
    header("location: error.php");
} else { // grno doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (name, grno, headc, class, section, dob) "
        . "VALUES ('$username','$grno','$headc','$class','$section','$dob')";

    // Add user to the database
    if ($mysqli->query($sql)) {

        header("location: addvoter.php");
    } else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}

