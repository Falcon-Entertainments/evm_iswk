<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
 
// Escape all $_POST variables to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM admins WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: addadmin.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO admins (username1, password, email, hash) " 
            . "VALUES ('$username','$password','$email','$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        header("location: addadmin.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: addadmin.php");
    }

}