<?php
$servername = "localhost";
$username = "root";
$password = "ostcse";

// Create connection
$conn = new mysqli($servername, $username, $password);//i is improved version

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
