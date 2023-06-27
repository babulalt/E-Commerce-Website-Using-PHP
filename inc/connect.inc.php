<?php
// function loadEnv()
// {
//     $lines = file(__DIR__ . '/../.env');
//     foreach ($lines as $line) {
//         $line = trim($line);
//         if ($line && strpos($line, '=') !== false) {
//             [$key, $value] = explode('=', $line, 2);
//             $_ENV[$key] = $value;
//             $_SERVER[$key] = $value;
//             putenv($key."=".$value);
//         }
//     }
// }

// Load the environment variables
// loadEnv();
$dbHost = getenv('DB_HOST');
$dbUsername = getenv('DB_USERNAME');
$dbPassword = getenv('DB_PASSWORD');
$dbName = getenv('DB_DATABASE');
// Create a connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// $servername = "172.17.0.3";
// $username = "root";
// $database = "my_database";

// // Create a connection
// $conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Close the connection
// $conn->close();
?>
