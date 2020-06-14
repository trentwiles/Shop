
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
    <body onload="hidev()">
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
                Your Items
            </h1>
            <?php
            $j = $_GET['j'];
            $n = $_GET['n'];
            $b = $_GET['b'];

            if($_GET['buildcart'] == "true"){
                echo '<form action="https://riverside.rocks/shop/checkout">';
                echo "    <label for=\"fname\"><a href=\"https://riverside.rocks/shop/bracelets\" target=\"_blank\">Number of Bracelets:</a></label><br>\n";
                echo "    <input type=\"text\" id=\"b\" name=\"b\" value=\"${b}\"><br><br>\n";
                echo "    <label for=\"lname\"><a href=\"https://riverside.rocks/shop/jewels\" target=\"_blank\">Number of Jewels:</a></label><br>\n";
                echo "    <input type=\"text\" id=\"j\" name=\"j\" value=\"${j}\"><br><br>\n";
                echo "    <label for=\"lname\"><a href=\"https://riverside.rocks/shop/necklaces\" target=\"_blank\">Number of Necklaces:</a></label><br>\n";
                echo "    <input type=\"text\" id=\"n\" name=\"n\" value=\"${n}\"><br><br>\n";
                echo "    <label for=\"lname\">Full Address (Street, City, Country)</label><br>\n";
                echo "    <input type=\"text\" id=\"ad\" name=\"ad\" value=\"\"><br><br>\n";
                echo "    <input type=\"submit\" value=\"Submit\">\n";
                echo "</form> ";
                echo "<br>";                
            }
            ?>
        <a href="?buildcart=true"><div class="siimple-btn siimple-btn--success">Cart Builder (Beta)</div></a><br><br><a href="/shop/reset"><div class="siimple-btn siimple-btn--success">Empty Cart</div></a>
        <br>
        <br>
        <i>Tip - Click on an item to learn more about it!</i>
        </center>
    </body>
</html>
