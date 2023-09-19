<?php
$servername = "localhost";
$database = "personalized";
$username = "root";
$password = "";

// Create a MySQLi connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}

// Don't forget to close the connection when you're done with it.
// $conn->close();  
