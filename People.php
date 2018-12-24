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
    <div class="cb-full">
        <div id="slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="img/slide/1.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>A family affair</h5>
                        <p>Celestial Bay Winery is very much a family affair with son Aaron taking over the helm as manager of the vineyard, overseeing all the viticultural activity at the winery over the past two years. After travelling the world far and wide Aaron finally settled down on the vineyard and completed his Bachelor of Science degree (Viticulture and Oenology) at Curtin University. </p>
                          <br>
                          <p>Aaron gained many years of experience during vintage, working for various wineries large and small, bringing back a wealth of knowledge and understanding of the industry to Celestial Bay. Aaron hopes to continue to uphold Celestial Bays reputation for producing quality wine in Margaret River.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="img/slide/2.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Our hand-picked winemaker Bernard!</h5>
                        <p>In his own words, Bernard was " born a bogan” (three weeks late and has been ever since!)</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="img/slide/3.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Relaxing</h5>
                        <p>Relax knowing that your order is purchased through PayPal and is verified by humans.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <div class="jumbotron bg-dark" style="margin-top: 50px">
                <div style="text-align: center">
                    <h2 style="margin-bottom: 10px;margin-top: -10px">Welcome to Celestial Bay Winery</h2>
                    <hr>
                </div>
                <div class="row midme">
                    <div class="col-md-5">
                        <p>Here at Celestial Bay Winery, we believe in a commitment to provide quality wine that reflects our family’s passion for making it!
                        <br><br>Situated in the famous South West region of Western Australia, our winery encompasses an idyllic coastal setting situated halfway between the renowned Margaret River and beautiful Busselton.</p>
                    </div>
                    <div class="col-md-6">
                        <p>The area is nationally and internationally recognised for producing some of the finest wines in the world, with Celestial Bay’s wines being no exception. It now exports to 5 countries, selling wine across Australia and regularly receives awards within Australia and internationally.
                        <br><br>As a family, we are very proud of our product, and hope that you enjoy tasting our fantastic wines as much as we enjoy making them!</p>
                    </div>
                </div>
            </div>
            <div class="jumbotron bg-dark" style="margin-top: 50px">
                <div style="text-align: center">
                    <h2 style="margin-bottom: 10px;margin-top: -10px">How it all began</h2>
                    <hr>
                </div>
                <div class="row midme">
                    <img height="230px" class="hiab-img" src="img/main/winery.jpg">
                    <div class="col-md-7 hiab">
                        <p>Our passion for perfection started with an ambition to create beautiful wine to be distributed for the enjoyment of others throughout Australia and eventually, internationally. In 2000, our owners Michael & Kim O’Brien chose Margaret River as the place in which to establish Celestial Bay, and after eventually purchasing 210 acres, turned their dream into a reality.
                        <br><br>Although it was not all smooth sailing, a little blood, sweat and red wine was all they needed for motivation, and today Celestial Bay is operated based on core family values that allow us to flourish and remain a respected name in the wine industry.</p>
                    </div>
                </div>
            </div>
            <div class="jumbotron bg-dark" style="margin-top: 50px">
                <div style="text-align: center">
                    <h2 style="margin-bottom: 10px;margin-top: -10px">Our family values</h2>
                    <hr>
                </div>
                <div class="row midme">
                    <div class="col-md-7 family">
                        <p>Having firmly planted themselves in Margaret River, and creating a brand that is synonymous with quality wine, Michael and Kim are proud to say that their quest for a “great drop” has been passed down the vine to their eldest son Aaron, who resides on the property.
                        <br><br>With the winery being his life passion, Aaron has also completed a bachelor of science in viticulture and oenology and after working at various vineyards far and wide, brings a wealth of knowledge and experience to the cellar.
                        <br><br>OverTo be acknowledged on an international stage is an incredible accomplishment and is a testament to the O’Brien family’s passion for the process. It regularly receives accolades and awards and is currently exporting to 5 countries worldwide including the USA, China and Japan. To this day, Celestial Bay Winery is committed to distributing quality and contemporary wine throughout the world.</p>
                    </div>
                    <img height="230px" class="family-img" src="img/main/winery-2.jpg">
                </div>
            </div>
            <div class="jumbotron bg-dark" style="margin-top: 50px">
                <div style="text-align: center">
                    <h2 style="margin-bottom: 10px;margin-top: -10px">Our present success</h2>
                    <hr>
                </div>
                <div class="row midme">
                <img height="230px" class="success-img" src="img/main/success.jpg">
                    <div class="success col-md-6">
                        <p>After starting as just a “little winery down south”, Celestial Bay and its friendly staff are proud to say it is both nationally and internationally recognised as a superb winery that selects only the most perfect grapes to be turned into quality wine.
                        <br><br>As a family, we are very proud of our product, and hope that you enjoy tasting our fantastic wines as much as we enjoy making them!</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="spacer"></div>
    <footer class="footer">
        <div style="text-align: center">
            <p>This site was made and is maintained by</p>
            <p><a href="">Harry Carrigan</a> and <a href="">Jamie Ralston</a></p>
    </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
