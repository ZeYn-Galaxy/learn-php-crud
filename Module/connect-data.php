<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "belajar-php-crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
// echo "Connected successfully";
?>