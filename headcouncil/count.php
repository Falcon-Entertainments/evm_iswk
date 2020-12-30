<?php
$email = 'vcb 2';
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'voting2018-19';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);


foreach($mysqli->query('SELECT dvcb,COUNT(dvcb) FROM votesb GROUP BY dvcb') as $row) {
echo "<tr>";
/* To check which name in the encription */
switch($row['dvcb']){
    case '09785675290466a7969e9da67deb1127add49ccd':
    $dvcbname = 'dvcb 1';
    break;
    case 'de8a6c6f610c6700298105eabe3fd20fd63eaac7':
    $dvcbname = 'dvcb 2';
    break;
    case '9a2d84455b1b28b05d56d539c2c4437f466d68da':
    $dvcbname = 'dvcb 3';
    break;
    case 'ac266591a8becabaad6f139ae91afb5583ee350e':
    $dvcbname = 'dvcb 4';
    break;
}
/* display name */
echo "<td>" . $dvcbname . "</td>";
echo "<br>";
/* votes */
echo "<td>" . $row['COUNT(dvcb)'] . "</td>";
echo "</tr>"; 
}
?>