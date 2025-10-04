<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "masteryhub";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullName = $_POST['fullName'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';
$role = $_POST['role'] ?? '';
$profileImage = "";

// Password validation
if ($password !== $confirmPassword) {
  die("<script>alert('Passwords do not match!'); window.history.back();</script>");
}

// Hash password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Handle image upload
if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
  $targetDir = "uploads/";
  if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
  }
  $profileImage = $targetDir . basename($_FILES['file']['name']);
  move_uploaded_file($_FILES['file']['tmp_name'], $profileImage);
}

// Insert data
$sql = "INSERT INTO users (full_name, email, password, role, profile_image) 
        VALUES ('$fullName', '$email', '$hashedPassword', '$role', '$profileImage')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Account created successfully!'); window.location.href='Login_Page.html';</script>";
} else {
  echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
}

$conn->close();
?>
