<?php
session_start();
include("config.php");

if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit();
}

// Count users from DB
$userCount = 0;
$orderCount = 0;

$userSql = "SELECT COUNT(*) AS total_users FROM tbusers";
$result = $conn->query($userSql);
if ($result && $row = $result->fetch_assoc()) {
    $userCount = $row["total_users"];
}

// Count orders (optional if you have 'orders' table)
$orderSql = "SELECT COUNT(*) AS total_orders FROM orders";
$orderResult = $conn->query($orderSql);
if ($orderResult && $orderRow = $orderResult->fetch_assoc()) {
    $orderCount = $orderRow["total_orders"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="./style.css">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="#">Dashboard</a>
    <a href="#">Users (<?php echo $userCount; ?>)</a>
    <a href="#">Orders (<?php echo $orderCount; ?>)</a>
    <a href="#">Settings</a>
  </div>

  <div class="main">
    <div class="header">
      <h2>Welcome Admin: <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
      <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <div class="dashboard-box">
      <h3>Dashboard Overview</h3>
      <div class="stats">
        <div class="card">
          <h3><?php echo $userCount; ?></h3>
          <p>Registered Users</p>
        </div>
        <div class="card" style="background-color: #2ecc71;">
          <h3><?php echo $orderCount; ?></h3>
          <p>Total Orders</p>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
