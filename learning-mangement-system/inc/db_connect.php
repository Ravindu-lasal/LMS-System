<?php
$servername = "localhost:3307";
$username = "root";
$password = "1234";
$dbname = "lms";

// $servername = "localhost:3306"; 
// $username = "root";        
// $password = "12345";           
// $dbname = "lms1";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
