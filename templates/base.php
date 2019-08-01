<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>

        <!-- Favico -->
        <link rel="icon" href="./public/images/ico/favicon.ico" type="image/x-icon">

        <!-- Metatags for social media -->
        <meta name="description" content="Alexis Gautier | Web Solutions" />

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Alexis Gautier | Web Solutions">
        <meta name="twitter:description" content="You need a Showcase Website, Webstore or Blog ? I'm here to help.">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="http://ocr.straightandalert.com/AlexisGautier/public/images/bg/bg2.jpg">

        <!-- Open Graph data -->
        <meta property="og:title" content="Alexis Gautier | Web Solutions" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ocr.straightandalert.com/AlexisGautier" />
        <meta property="og:image" content="http://ocr.straightandalert.com/AlexisGautier/public/images/bg/bg2.jpg" />
        <meta property="og:description" content="You need a Showcase Website, Webstore or Blog ? I'm here to help." />
        <meta property="og:site_name" content="Alexis Gautier | Web Solutions" />

        <link href="./public/css/min/bootstrap.min.css" rel="stylesheet">
        <link href="./public/css/min/prettyPhoto.min.css" rel="stylesheet">
        <link href="./public/css/min/animate.min.css" rel="stylesheet">
        <link href="./public/css/min/dropdowns-enhancement.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="./public/js/min/html5shiv.min.js"></script>
        <script src="./public/js/min/respond.min.js"></script>
        <![endif]-->

        <!-- Jquerry -->
        <script src="./public/js/min/jquery.min.js"></script>

        <!-- Font Awesome Icon -->
        <script src="https://kit.fontawesome.com/0e45521ec5.js"></script>

        <!-- Custom stlylesheet -->
        <link href="./public/css/min/style.min.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Display the menu-->
        <div id="preloader"></div>
        <header class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php?action=home"><h1><i class="fas fa-sliders-h"></i> ALEXIS GAUTIER</h1></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?action=home">Home</a></li>
                        <li><a href="index.php?action=services">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quote <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?action=services#pricing">All included packs</a></li>
                                <li><a href="index.php?action=quote">Custom quote</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?action=portfolio">Portfolio</a></li>
                        <li><a href="index.php?action=about">About Me</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Displays a message if user is not using Javascript -->
        <noscript>
                <h2>You need to activate Javascript to use this website !</h2>
        </noscript>

        <?= $content ?>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 ">
                        <a href="index.php?action=privacyPolicy">Privacy Policy</a> &emsp;
                        <a href="index.php?action=termsAndCondition">Terms & Conditions</a> &emsp;
                    </div>
                </div>
            </div>
            <!-- Back to top -->
            <a href="#header" onclick="$('html,body').animate({scrollTop:0},'slow');return false;"><i class="fas fa-arrow-circle-up"></i></a>
            <!-- Copyright -->
            <div class="footer-copyright text-center">
                <span>&copy;<script>document.write(new Date().getFullYear());</script> - Alexis Gautier</span>
                <p><small><a href="https://templatemag.com/bootstrap-templates/">Bootstrap templates</a> by TemplateMag</small></p>
            </div>
        </footer>

        <!-- My scripts -->
        <script src="./public/js/min/browsers.min.js" ></script>
        <script src="./public/js/min/plugins.min.js"></script>
        <script src="./public/js/min/bootstrap.min.js"></script>
        <script src="./public/js/min/jquery.prettyPhoto.min.js"></script>
        <script src="./public/js/min/init.min.js"></script>
        <script src="./public/js/min/main.min.js"></script>
        <script src="./public/js/min/customQuote.min.js"></script>

        <!-- Has to be loaded here because regular boostrap dropdown menus have been modified for custom quote-->
        <script src="./public/js/min/dropdowns-enhancement.min.js"></script>
    </body>
</html>