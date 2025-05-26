<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            </ul>
        </nav>
    </div>
    <div class="checkout"  id="hide-show"><!--checkout ABA Paywy-->
        <div class="ch-box">
            <div id="reader-cart">
                <img src="./assets/cacocola001.png" alt="Error">
                <p>Name</p>
                <p>Price</p>
                <button type="button" id="dele-cart">Delete</button>
            </div>
        </div>
        <div id="ch-result">
            <h1 id="total">Total:$0.00</h1>
            <button type="button" id="btn">Checkout</button>
        </div>
    </div> <!--navbar-->
   
    <!--slide-->
    <div id="slide">
        <img src="./assets/logodrink.jpg" alt="">
    </div>
    <!--text-->
    <h1 id="h1">INTRODUCTIONS</h1>
    <!--body-->
    <div class="layout">
        <div class="box">
            <h2>Coca Cola</h2>
            <p>
                Coca-Cola is a carbonated beverage made by the Coca-Cola company based in Atlanta, Georgia.
                The brand name originates from its two key ingredients: cocaine and caffeine, which are extracted
                 respectively from the coca leaf and the kola nut, hence its name Coca-Cola.
            </p>
            <img src="./assets/cocola.png" alt="">
        </div>  
        <div class="box">
            <h2>Lactasoy</h2>
            <p>
            Great selection with our Original Classic taste! The perfect combination
             of natural protein from soybean and whole milk powder provides the highest nutrition with the finest taste.
            </p>
            <img src="./assets/lactasoy.png" alt="">
        </div>  
    </div>
    <!--list of drink-->
    <div class="list-drink">
        <img src="./assets/cacocola001.png" alt="">  
        <img src="./assets/lactasoy_logo002.png" alt="">  
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