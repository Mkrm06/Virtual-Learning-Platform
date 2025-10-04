<?php
include('config.php');
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Get stats
$userCount = $conn->query("SELECT COUNT(*) as c FROM users")->fetch_assoc()['c'];
$courseCount = $conn->query("SELECT COUNT(*) as c FROM courses")->fetch_assoc()['c'];
$instructorCount = $conn->query("SELECT COUNT(*) as c FROM instructors")->fetch_assoc()['c'];
$enrollmentCount = $conn->query("SELECT COUNT(*) as c FROM enrollments")->fetch_assoc()['c'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include('navbar.php'); ?>

<div class="container mt-4">
  <h3 class="mb-4">Welcome, Admin!</h3>

  <div class="row">
    <div class="col-md-3">
      <div class="card text-center p-3 bg-primary text-white">
      <h5> <a href="create_user.php" class="btn btn-primary">Add New User</a></h5>
        <h3><?= $userCount ?></h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center p-3 bg-success text-white">
        <h5>Courses</h5>
        <h3><?= $courseCount ?></h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center p-3 bg-warning text-white">
        <h5>Instructors</h5>
        <h3><?= $instructorCount ?></h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center p-3 bg-danger text-white">
        <h5>Enrollments</h5>
        <h3><?= $enrollmentCount ?></h3>
      </div>
    </div>
  </div>
</div>

</body>
</html>
