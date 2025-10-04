<?php
// Database configuration
$host = "localhost";      // XAMPP default
$user = "root";           // default username
$pass = "";               // leave blank unless you set a MySQL password
$db   = "masteryhub";     // your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}
?>
