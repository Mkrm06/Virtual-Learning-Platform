<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>

</head>
<body>

  <h2>Welcome <?php echo $_SESSION['email']; ?> 🎉</h2>
  <a href="logout.php">Logout</a>

</body>
</html>

