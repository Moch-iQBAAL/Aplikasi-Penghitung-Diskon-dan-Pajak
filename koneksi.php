<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ukk-2025';

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
?>