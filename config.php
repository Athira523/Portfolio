<?php
$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
