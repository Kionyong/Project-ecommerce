<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit();
}
?>
<h2>Welcome Admin: <?php echo $_SESSION["username"]; ?></h2>
<a href="logout.php">Logout</a>
