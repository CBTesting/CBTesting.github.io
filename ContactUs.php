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
            <div class="jumbotron bg-dark" style="margin-top: 50px">
            <div style="text-align: center">
                <h2 style="margin-bottom: 10px;margin-top: -10px">Contact us!</h2>
                <hr>
            </div>
            <div class="row midme">
                    <div class="col-md-5">
                        <p>At the Celestial Bay Wines, we allow our wines to reflect our passion for the winemaking process that is unique to the Margaret River area. Our winery has experienced widespread success and steadily built a reputation for delivering the finest range of wines available in Australia.
                        <br><br>Visit our site today and allow yourself to be immersed in the wide collection of quality wines we have on offer. Our wines are available for export worldwide.</p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Email: information@celestialbay.com
                        <br><br>Administration: +61 08 9450 4191
                        <br><br>Vineyard and Winery: +61 08 9755 7021
                       </b></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
