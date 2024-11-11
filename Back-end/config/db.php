<?php
// Database connection parameters
$host = 'localhost';       // Typically 'localhost' for local development
$db_user = 'root';         // MySQL username (default is 'root' for XAMPP)
$db_pass = '';             // MySQL password (default is empty for XAMPP)
$db_name = 'plant_ecom_db';

// Create a connection
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

