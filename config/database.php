<?php
$hostname = "localhost";
$username = "root";
$password = "RX3cttemQk5NVHU8";
$dbname = "vegro_farms_ems_db";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set charset to utf8mb4 for proper Unicode support
if (!$conn->set_charset("utf8mb4")) {
    die("Error loading character set utf8mb4: " . $conn->error);
}

// Optional: Enable strict mode to prevent invalid data from being inserted
if (!$conn->query("SET sql_mode = 'STRICT_TRANS_TABLES'")) {
    die("Error setting sql_mode: " . $conn->error);
}

// Now you can use $conn for your database operations
?>
