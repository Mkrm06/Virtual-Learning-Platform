<?php
include 'db_connect.php';

$secret = "my-secret-code"; // Only you know this code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['access_key'] !== $secret) {
        echo "<script>alert('Unauthorized Access!');</script>";
        exit;
    }

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'admin';

    $stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $role);
    if ($stmt->execute()) {
        echo "<script>alert('Admin registered successfully!');</script>";
    } else {
        echo "<script>alert('Error registering admin!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Admin Registration</title></head>
<body>
<form method="POST">
  <input type="text" name="access_key" placeholder="Secret Access Code" required><br><br>
  <input type="email" name="email" placeholder="Admin Email" required><br><br>
  <input type="password" name="password" placeholder="Admin Password" required><br><br>
  <button type="submit">Create Admin</button>
</form>
</body>
</html>
