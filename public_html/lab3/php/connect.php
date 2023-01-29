<?php
$servername = "localhost";
$database = "a0771967_bd";
$username = "a0771967_bd";
$password = "root";
$connect = mysqli_connect($servername, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
