include('config.php');
include('navbar.php');
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
