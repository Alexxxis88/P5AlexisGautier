<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>

        <!-- Favico 
        <link rel="icon" href="./public/img/favicon.ico" type="image/x-icon">-->

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