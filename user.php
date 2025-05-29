<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "user") {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="./style.css">
  <style>
    body {
        font-family: Arial, sans-serif;
        background: #f0f2f5;
        margin: 0;
        padding: 0;
    }
    /* .navbar {
        background-color: #007bff;
        padding: 1em;
        color: white;
        display: flex;
        justify-content: space-between;
    }
    .navbar a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
    }
    .container {
        max-width: 900px;
        margin: 50px auto;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    } */
    h2 {
        color: #333;
    }
  </style>
</head>
<body>

<div class="navbar">
    <div><strong>User Panel</strong></div>
    <div>
        <a href="home.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <p>You are logged in as a <strong>user</strong>.</p>

    <!-- អ្នកអាចបន្ថែមការបង្ហាញ order, cart, profile នៅទីនេះ -->
</div>

</body>
</html>


