<?php
$servername = "172.17.0.3";
$username = "root";
$password = "MyR00tP@ssw0rd";
$database = "my_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
//$conn->close();
?>
