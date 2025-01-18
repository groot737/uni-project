<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "newsdb";


$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
