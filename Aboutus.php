<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        header {
            color: #fff;
            padding: 1rem 2rem;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        p {
            margin-bottom: 1rem;
        }
        .team {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        .team-member {
            flex: 1;
            padding: 1rem;
            background-color: #f1f1f1;
            border-radius: 8px;
            text-align: center;
        }
        .team-member img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <!--navbar-->
    <div id="nav-bar">
        <h1>Drinks</h1>
        <nav>
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./products.php">Products</a></li>
                <li><a href="./Aboutus.php">About Us</a></li>
                <li><a onclick="showHide()">Checkout</a></li>

                <?php if (isset($_SESSION['username'])): ?>
                    <!-- If logged in -->
                    <li>
                        <a href="<?php echo ($_SESSION['role'] == 'admin') ? './admin.php' : './user.php'; ?>" id="profile">MyAccount</a>
                    </li>
                    <li><a href="./logout.php"><button type="button">Logout</button></a></li>
                <?php else: ?>
                    <!-- If not logged in -->
                    <li><a href="./login.php"><button type="button" id="login">Login</button></a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
<header>
    <h1>About Us</h1>
</header>

<div class="container">
    <h2>Who We Are</h2>
    <p>
        Welcome to our store! We specialize in providing top-quality beverages for your enjoyment. 
        Our mission is to deliver refreshing drinks that bring a smile to every customer.
    </p>

    <h2>Our Story</h2>
    <p>
        Founded in 2022, we started as a small local distributor and have since grown into a trusted brand with a wide variety of products. 
        We take pride in offering affordable and delicious drinks that people love.
    </p>

    <h2>Meet the Team</h2>
    <div class="team">
        <div class="team-member">
            <img src="./assets/Profile.png" alt="Alice">
            <h3>Alice</h3>
            <p>Founder & CEO</p>
        </div>
        <div class="team-member">
            <img src="./assets/Profile.png" alt="Bob">
            <h3>Bob</h3>
            <p>Operations Manager</p>
        </div>
        <div class="team-member">
            <img src="./assets/Profile.png" alt="Carol">
            <h3>Carol</h3>
            <p>Marketing Lead</p>
        </div>
    </div>
</div>
    <!--footer-->
        <footer id="footer">
        <h1>Drinks</h1>
        <div class="footer-text">
            <ul>
                <li>Localtion: Phnom Phen</li>
                <li>Phone Number: 094 165 234</li>
            </ul>
        </div>
        <div>
            <h1>Please help preserve the rights. If you redistribute it, you must be responsible.</h1>
        </div>
    </footer>
    <script src="./javascript.js"></script>
</body>
</html>
