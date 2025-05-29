<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./style.css">
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
    </div><!--navbar-->
    <div class="checkout"  id="hide-show"><!--checkout ABA Paywy-->
        <div class="ch-box">

        </div>
        <div id="ch-result">
            <h1 id="total">Total:$0.00</h1>
            <button type="button" id="btn">Checkout</button>
        </div>
    </div> <!--navbar-->
    <h2 style="font-size: 20px;font-family: sans-serif;text-align: center; margin-top:20px;">PRODUCTS</h2>
    <!--Products-->
    <div class="products"> </div>
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