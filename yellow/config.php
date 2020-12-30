<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'voting2018-19';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>