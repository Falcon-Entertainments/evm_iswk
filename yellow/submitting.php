<?php
$_SESSION['name'] =$_POST['name'];
$_SESSION['grno'] =$_SESSION['grno'];
$_SESSION['dvcb'] =$_POST['dvcb'];
$_SESSION['dvcg'] =$_POST['dvcg'];
$_SESSION['vcb'] =$_POST['vcb'];
$_SESSION['vcg'] =$_POST['vcg'];
$_SESSION['dcb'] =$_POST['dcb'];
$_SESSION['dcg'] =$_POST['dcg'];
$_SESSION['cb'] =$_POST['cb'];
$_SESSION['cg'] =$_POST['cg'];
$_SESSION['dob'] =$_POST['dob'];

// Escape all $_POST variables to protect against SQL injections and encryption of data
$name = $mysqli->escape_string($_POST['name']);
$dob = $mysqli->escape_string($_POST['dob']);
$dvcb = $mysqli->escape_string($_POST['dvcb']);
$dvcg = $mysqli->escape_string($_POST['dvcg']);
$vcb = $mysqli->escape_string($_POST['vcb']);
$vcg = $mysqli->escape_string($_POST['vcg']);
$dcb = $mysqli->escape_string($_POST['dcb']);
$dcg = $mysqli->escape_string($_POST['dcg']);
$cb = $mysqli->escape_string($_POST['cb']);
$cg = $mysqli->escape_string($_POST['cg']);

// Check if user with that grno already voted
$result = $mysqli->query("SELECT * FROM votesy WHERE grno='$grno'");

if ( $result->num_rows > 0 ) {
    $_SESSION['message'] = 'Voter with this GR.NO already voted!';
    header("location: error.php");
}
// Entering data to database
else{
    $sql = "INSERT INTO votesy (name1, grno, dvcb, dvcg, vcb, vcg, dcb, dcg, cb, cg) " 
    . "VALUES ('$name','$grno','$dvcb','$dvcg','$vcb','$vcg','$dcb','$dcg','$cb','$cg')";
    $sql1 = "INSERT INTO voted (name1, grno, dob) " 
    . "VALUES ('$name','$grno','$dob')";

    // if data entery was successfull to data base
    if ( $mysqli->query($sql) && $mysqli->query($sql1) ){
        $_SESSION['message'] = 'your vote has been successfully recorded. Thankyou for your cooperation 🙂';
        header("location: success.php"); 
    }
    // if data entery was not successfull to data base
    else {
        $_SESSION['message'] = 'vote failed! condact a crew member nearby';
        header("location: error.php");
    }
}

?>