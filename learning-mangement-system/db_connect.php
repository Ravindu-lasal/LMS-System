<?php
$servername = "localhost";  // Replace with your server name or IP address if hosting remotely
$username = "root";         // MySQL username (default is 'root' for local development)
$password = "";             // MySQL password (empty by default on local servers)
$dbname = "lms";    // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully";
}
?>