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

        <link href="./public/css/bootstrap.min.css" rel="stylesheet">
        <link href="./public/css/prettyPhoto.css" rel="stylesheet">
        <link href="./public/css/animate.css" rel="stylesheet">
        <link href="./public/css/dropdowns-enhancement.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="./public/js/html5shiv.js"></script>
        <script src="./public/js/respond.min.js"></script>
        <![endif]-->

        <!-- Jquerry -->
        <script src="./public/js/jquery.js"></script>

        <!-- Font Awesome Icon -->
        <script src="https://kit.fontawesome.com/0e45521ec5.js"></script>

        <!-- Custom stlylesheet -->
        <link href="./public/css/style.min.css" rel="stylesheet" />
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
                <h1>You need to activate Javascript to use this website !</h1>
                <h2>How to activate JavaScript ?</h2>
                <p>Chrome : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-chrome.html">see tutoriall</a></p>
                <p>Firefox : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-firefox.html">see tutoriall</a></p>
                <p>Internet Explorer : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-internet-explorer.html">see tutoriall</a></p>
                <p>Edge : <a href="https://assistance.orange.fr/ordinateurs-peripheriques/depanner/probleme-de-navigation/impossible-de-naviguer/edge/microsoft-edge-activer-javascript_201172-745288">see tutoriall</a></p>
                <p>Opera : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-opera.html">see tutoriall</a></p>
                <p>Safari : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-safari.html">see tutoriall</a></p>
                <p>Safari iOS : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-safari.html#ios">see tutoriall</a></p>
                <p>Android : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-android.html">see tutoriall</a></p>
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
        <script src="./public/js/browsers.js" ></script>
        <script src="./public/js/plugins.js"></script>
        <script src="./public/js/bootstrap.min.js"></script>
        <script src="./public/js/jquery.prettyPhoto.js"></script>
        <script src="./public/js/init.js"></script>
        <script src="./public/js/main.js"></script>
        <script src="./public/js/customQuote.js"></script>

        <!-- Has to be loaded here because regular boostrap dropdown menus have been modified for custom quote-->
        <script src="./public/js/dropdowns-enhancement.js"></script>
    </body>
</html>