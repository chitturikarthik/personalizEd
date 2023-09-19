<?php
$servername = "localhost";
$database = "personalized";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername,$database, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
