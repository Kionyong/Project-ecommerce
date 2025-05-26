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
                <li><a href="./home.html">Home</a></li>
                <li><a href="./products.html">Products</a></li>
                <li><a href="./Aboutus.html">About Us</a></li>
                <li><a onclick="showHide()">Checkout</a></li>
            </ul>
        </nav>
    </div>
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