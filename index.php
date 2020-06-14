<?php


// Notes: This is the index page, it doesn't have any PHP on it (for now)




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
        <script src="/src/video.js"></script>
        <div class="siimple-navbar siimple-navbar--green siimple-navbar--fluid">
            <a href="/shop.php" class="siimple-navbar-title">SHOP RIVERSIDE ROCKS</a>
            <div class="siimple--float-right">
                <a href="/shop/cart" class="siimple-navbar-item">Cart (<?php echo $cart; ?>)</a>
            </div>
        </div>
        <center>
        <div class="siimple-jumbotron siimple-jumbotron--green siimple-jumbotron--fluid">
            <div class="siimple-jumbotron-title"><img src="https://canary.riverside.rocks/i/3366eeabf77c8ad7f93b404a3d14b961.png" /></div>
            <div class="siimple-jumbotron-subtitle">Newest Items</div>
            <div class="siimple-box-detail"><a href="javascript:video()">Watch the film</a></div>
        </div>
        <br>
        <table>
            <tr>
             <td width="10%">
                <a href="/shop/jewels">
                <div class="siimple-box siimple-box--primary">
                    <div class="siimple-box-title">Hair Jewels</div>
                    <div class="siimple-box-detail">Blow your friends away!</div>
                </div>
                </a>
             </td>
             <td width="10%">
                <a href="/shop/necklaces">
                <div class="siimple-box siimple-box--primary" width="25%">
                    <div class="siimple-box-title">Necklaces</div>
                    <div class="siimple-box-detail">Have a blast with these kits!</div>
                </div>
                </a>
             </td>
            </tr>
            <tr>
             <td width="10%">
                <a href="/shop/bracelets">
                <div class="siimple-box siimple-box--primary">
                    <div class="siimple-box-title">Bracelets</div>
                    <div class="siimple-box-detail">Blow your friends away!</div>
                </div>
                </a>
             </td>
             <td width="10%">
                <a href="/shop/kits">
                <div class="siimple-box siimple-box--primary" width="25%">
                    <div class="siimple-box-title">Experiment Kits</div>
                    <div class="siimple-box-detail">Have a blast with these kits!</div>
                </div>
                </a>
             </td>
            </tr>
        </table>
        <div class="siimple-rule"></div>
        <h1>Even more products coming soon!</h1>
     </center>
    </body>
</html>
