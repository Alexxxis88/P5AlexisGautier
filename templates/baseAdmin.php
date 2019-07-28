<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>

        <!-- Favico -->
        <link rel="icon" href="./public/images/ico/favicon.ico" type="image/x-icon">

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
        <!-- Back to top button anchor -->
        <div id="header"></div>

        <?php
        //display the right menu depending on the user role
            require('admin/adminMenu.php');
        ?>

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

        <!-- Has to be loaded here because regular boostrap dropdown menus have been modified for custom quote-->
        <script src="./public/js/min/dropdowns-enhancement.min.js"></script>
    </body>
</html>