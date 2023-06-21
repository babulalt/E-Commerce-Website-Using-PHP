<?php
$servername = "mysql-132595-0.cloudclusters.net";
$username = "admin";
$password = "BTfiigJs";
$database = "ecommerce";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>
