<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>

        <!-- Favico 
        <link rel="icon" href="./public/img/favicon.ico" type="image/x-icon">-->

        <!-- Metatags for social media 
        <meta name="description" content="Bienvenue sur le blog de Jean Forteroche!" />-->

        <!-- Twitter Card data
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Un billet simple pour l'Alaska - Jean Forteroche">
        <meta name="twitter:description" content="Découvrez Un billet simple pour l'Alaska, le nouveau roman de Jean Forteroche">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="http://ocr.straightandalert.com/jean-forteroche/public/img/home-picture.jpg"> -->

        <link href="./public/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link href="./public/css/font-awesome.min.css" rel="stylesheet">-->
        <!-- <link href="./public/css/pe-icons.css" rel="stylesheet">-->
        <link href="./public/css/prettyPhoto.css" rel="stylesheet">
        <link href="./public/css/animate.css" rel="stylesheet">
        <link href="./public/css/style.css" rel="stylesheet">
        <link href="./public/css/dropdowns-enhancement.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="./public/js/html5shiv.js"></script>
        <script src="./public/js/respond.min.js"></script>
        <![endif]-->

        <script src="./public/js/jquery.js"></script>


        <!-- Jquerry 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->


        <!-- Bootstrap 
            Latest compiled and minified CSS 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

            <!-- Optional theme 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

            <!-- Latest compiled and minified JavaScript 
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->

        <!-- Font Awesome Icon -->
        <script src="https://kit.fontawesome.com/0e45521ec5.js"></script>

        <!-- Custom stlylesheet 
        <link href="./public/css/style.css" rel="stylesheet" />-->

        <!--GDPR Cookies
        <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="56b79623-bfec-4453-85a4-74b56c492891" async></script>disclaimer-->


    </head>

    <body>

        <?php
        //display the right menu depending on the user role
        // if (isset($checkUserRole['groupId']) && $checkUserRole['groupId'] == 1) {
        //     require('admin/menuAdmin.php');
        // } else {
        //     require('front/menu.php');
        // }
        ?>


        <!--display the menu-->
        <div id="preloader"></div>
        <header class="navbar navbar-inverse navbar-fixed-top ">
            <div class="container" id="navContainer">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?action=home"><h1><span class="fas fa-sliders-h"></span> ALEXIS GAUTIER</h1></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?action=home">Home</a></li>
                        <li><a href="index.php?action=services">Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quote <span class="fa fa-angle-down"></span></a>
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
                <div class="lang">
                    <a href="#">FR</a> / <a href="#">EN</a>
                </div>
            </div>
        </header>



        <!-- Displays a message if user is not using Javascript -->
        <noscript>
                <h1>Vous devez activer JavaScript pour utiliser ce site !</h1>
                <h2>Comment activer JavaScript ?</h2>
                <p>Chrome : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-chrome.html">voir le tutoriel</a></p>
                <p>Firefox : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-firefox.html">voir le tutoriel</a></p>
                <p>Internet Explorer : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-internet-explorer.html">voir le tutoriel</a></p>
                <p>Edge : <a href="https://assistance.orange.fr/ordinateurs-peripheriques/depanner/probleme-de-navigation/impossible-de-naviguer/edge/microsoft-edge-activer-javascript_201172-745288">voir le tutoriel</a></p>
                <p>Opera : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-opera.html">voir le tutoriel</a></p>
                <p>Safari : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-safari.html">voir le tutoriel</a></p>
                <p>Safari iOS : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-safari.html#ios">voir le tutoriel</a></p>
                <p>Android : <a href="http://aboutjavascript.com/fr/how-to-enable-javascript-in-android.html">voir le tutoriel</a></p>
        </noscript>

        <?= $content ?>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12 ">
                        <a href="index.php?action=privacyPolicy">Privacy Policy</a> &emsp;
                        <a href="index.php?action=termsAndCondition">Terms & Conditions</a> &emsp;
                        <a href="index.php?action=legalNotice">Legal Notice</a>
                    </div>
                </div>
            </div>
            <!-- Back to top -->
            <a href="#header" onclick="$('html,body').animate({scrollTop:0},'slow');return false;"><span class="fas fa-arrow-circle-up"></span></a>
            <!-- Copyright -->
            <div class="footer-copyright text-center">
                <span>&copy;<script>document.write(new Date().getFullYear());</script> - Alexis Gautier - All rights reserved</span>
            </div>
        </footer>

        <!-- My scripts -->
        <script src="./public/js/plugins.js"></script>
        <script src="./public/js/bootstrap.min.js"></script>
        <script src="./public/js/jquery.prettyPhoto.js"></script>
        <script src="./public/js/init.js"></script>
        <script src="./public/js/main.js"></script>

        <!-- A GARDER !!! car fichier modifiés pour les menus bootstrap-->
        <script src="./public/js/dropdowns-enhancement.js"></script>
    </body>
</html>