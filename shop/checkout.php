<?php
if($_GET['b'] == ""){
    $_GET['b'] = 0;
}
if($_GET['j'] == ""){
    $_GET['j'] = 0;
}
if($_GET['n'] == ""){
    $_GET['n'] = 0;
}
if($_GET['none'] == "true"){
    echo "<div class='siimple-alert siimple-alert--error'><p>Oh no, it appears you didn't put anything in the cart!<br><a href='/shop/cart?buildcart=true' style='color:inherit;'>Click here to go back</a></div>";
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Riverside Rocks Shop</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/siimple@3.3.1/dist/siimple.min.css">
        <style>
            a{
                text-decoration: none;
            }
        </style>
        <script src="/src/cart.js"></script>
        <base href="https://riverside.rocks/shop/cart">
    </head>
    <body>
        <!--
            2020 Riverside Rocks
        -->
        <div class="siimple-navbar siimple-navbar--green siimple-navbar--fluid">
            <a href="/shop.php" class="siimple-navbar-title">Shop Riverside Rocks</a>
            <div class="siimple--float-right">
                <a href="/shop/cart" class="siimple-navbar-item">Cart</a>
            </div>
        </div>
        <center>
            <h1>
                Checkout
            </h1>
            <?php
            $username = "username"; // Replace this with your Venmo username
            $bmoney = $_GET['b'] * 5.99;
            $nmoney = $_GET['n'] * 6.99;
            $jmoney = $_GET['j'] * 15;
            $money = $jmoney + $bmoney + $nmoney;
            $message = "Purchased " . $_GET['b'] . " bracelets, " . $_GET['n'] . " Necklaces, and " . $_GET['j'] . " Jewels. Ship to " . $_GET['ad'];
            $url = "https://venmo.com/?txn=pay&audience=private&recipients=${username}&amount=${money}&note=${message}";
            if($_GET['n'] == "" && $_GET['j'] == "" && $_GET['b'] == ""){
                $url = "/shop/checkout?none=true";
            }
            echo '<blockquote class="siimple-blockquote" style="width:20%;background-color:#e7e4e4;"><strong>';
            echo "You have " . $_GET['b'] . " bracelets.";
            echo "<br>";
            echo "You have " . $_GET['j'] . " Jewels.";
            echo "<br>";
            echo "You have " . $_GET['n'] . " Necklaces.";
            echo "</strong></blockquote>";
            echo "<br><h3>Your total is $" . $money . "</h3><br>";
            if($_GET['ad'] == ""){
                echo "<div class='siimple-alert siimple-alert--warning' style='width:30%;' ><p><b>Warning: </b> It appears that you do not have an address entered in on the checkout page. Leaving this information blank is not reccomended.<br><br><a href='/shop/cart?buildcart=true' style='color:inherit;'>Click here to go back</a></div>";
            }
            echo "<div class='siimple-btn siimple-btn--success'><a href='${url}' target='_blank' style='color:inherit;'>Pay with Venmo</a></div>";
            ?>
        </center>
    </body>
</html>
