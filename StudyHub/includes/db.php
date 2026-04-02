<?php
// Database configuration
$servername = "localhost:3307"; // XAMPP MySQL/MariaDB is on port 3307
$username = "root";
$password = ""; // Default XAMPP password is empty
$dbname = "studyhub_db"; // Using the database created by setup.sql

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
