<?php
$servername = "localhost:3306";  // Replace with your server name or IP address if hosting remotely
$username = "root";         // MySQL username (default is 'root' for local development)
$password = "12345";             // MySQL password (empty by default on local servers)
$dbname = "lms";    // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
