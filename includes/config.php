<?php
$host = 'localhost';
$db_name = 'modernfitgymdb';
$user = 'root';
$password = '';

$con = new mysqli($host, $user, $password, $db_name);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>