<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "managmentKJSTUV/tovar.php";

?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $company ?></title>
    <meta name="description" content="<?php echo $shortDescription ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="img/ICON.png" />
    <meta name="viewport" content="width=device-width" />
</head>
<body>
    <div class="container" id="navtop">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
            <a href="index.php" class=" navbar-brand">
                <img class="navbar-brand" src="img/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar ml-auto">
                <?php require_once "managmentKJSTUV/nav.php"; ?>
                </ul>
            </div>
        </nav>
    </div>
        <div class="container">
            <div class="jumbotron bg-dark">
                <div class="text-center">
                    <h2>Wine store</h2>
                </div>
                <hr class="FHR">
                <div class="row midme">
                    <div class="col-md-5">
                        <p>At Celestial Bay Winery we offer an extensive variety of quality local wines available online for your convenience! Ranging from Chardonnay and Sauvignon Blanc, to Malbec and our ever popular Cabernet Sauvignon. All of our wines are made from only the finest grapes, and are selected, pressed and bottled on site in line with our family values and standards.
                        <br><br>Whether you are dining out, celebrating an occasion or looking to unwind after a long day at work, there is something from the huge variety across the Celestial Bay collection to offer a memorable drinking experience.</p>
                    </div>
                    <img src="img/store/wines.jpg" height="300px">
                    <div class="text-center" style="font-size: 10px;margin: 0;padding: 0">
                        <p>Scroll down to view our finest wine products</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="store">
            <div class="jumbotron">
                <h2>Products:</h2>
                <p>Browse all of our finest wines</p>
                <hr class="uniquehr">
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
