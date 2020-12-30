<?php
$_SESSION['name'] =$_POST['name'];
$_SESSION['grno'] =$_SESSION['grno'];
$_SESSION['prcb'] =$_POST['prcb'];
$_SESSION['prcg'] =$_POST['prcg'];
$_SESSION['ccb'] =$_POST['ccb'];
$_SESSION['ccg'] =$_POST['ccg'];
$_SESSION['scb'] =$_POST['scb'];
$_SESSION['scg'] =$_POST['scg'];
$_SESSION['dhb'] =$_POST['dhb'];
$_SESSION['dhg'] =$_POST['dhg'];
$_SESSION['hb'] =$_POST['hb'];
$_SESSION['hg'] =$_POST['hg'];
$_SESSION['dob'] =$_POST['dob'];

// Escape all $_POST variables to protect against SQL injections and encryption of data
$name = $mysqli->escape_string($_POST['name']);
$dob = $mysqli->escape_string($_POST['dob']);
$prcb = $mysqli->escape_string($_POST['prcb']);
$prcg = $mysqli->escape_string($_POST['prcg']);
$ccb = $mysqli->escape_string($_POST['ccb']);
$ccg = $mysqli->escape_string($_POST['ccg']);
$scb = $mysqli->escape_string($_POST['scb']);
$scg = $mysqli->escape_string($_POST['scg']);
$dhb = $mysqli->escape_string($_POST['dhb']);
$dhg = $mysqli->escape_string($_POST['dhg']);
$hb = $mysqli->escape_string($_POST['hb']);
$hg = $mysqli->escape_string($_POST['hg']);

// Check if user with that grno already voted
$result = $mysqli->query("SELECT * FROM votesh WHERE grno='$grno'");

if ( $result->num_rows > 0 ) {
    $_SESSION['message'] = 'Voter with this GR.NO already voted!';
    header("location: error.php");
}
// Entering data to database
else{
    $sql = "INSERT INTO votesh (name1, grno, prcb, prcg, ccb, ccg, scb, scg, dhb, dhg, hb ,hg) " 
    . "VALUES ('$name','$grno','$prcb','$prcg','$ccb','$ccg','$scb','$scg','$dhb','$dhg','$hb','$hg')";
    $sql1 = "INSERT INTO votedh (name1, grno, dob) " 
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