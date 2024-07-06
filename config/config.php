<?php
$hostname = "localhost";
$username = "root";
$password = "RX3cttemQk5NVHU8";
$dbname = "vegro_farm";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
