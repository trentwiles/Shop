<?php
if($_GET['buy'] == "1"){
    $_SESSION["bracelets"] = "true";
    $_SESSION["cart"] = $_SESSION["cart"] + 1;
    header("Location: /shop/cart?buildcart=true&b=1");
    die();
}

// PAYMENT INFO
// Note: Change this info if you want to update the price of an item.
// Note, this is local, to this page, data and is not stored in a database (yet)

$cost = "6"; // Cost of the item.
$username = ""; // Fill this out when we get a Venmo account.
$desc = "Bracelets from Riverside Rocks"; // Description of the payment.



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
            <h1>Hair Jewels</h1>
            <br>
            <h2>Style your hair like a pro.</h2>
            <br>
            <table style="width:100%">
                <tr>
                    <img src="https://canary.riverside.rocks/i/63c39d54c8f21a54158807a746815bf3.jpg" height="200px" width="400px" /></th>
                    <th><a href="/shop/bracelets?buy=1"><div style="width:30%" class="siimple-btn siimple-btn--success">Buy</div></a></th>
                </tr>
            </table>
            
        </center>
