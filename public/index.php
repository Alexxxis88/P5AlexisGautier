<?php
session_start();
require_once('src/controller/DisplayController.php');

//AUTOLOAD
// function classAutoLoad($class)
// {
//     require 'src/entity/' . $class . '.php';
// }
// spl_autoload_register('classAutoLoad');


try {
    if (isset($_GET['action'])) {

        //DISPLAY PAGES
        if ($_GET['action'] == 'home' or $_GET['action'] == '') {
            $DisplayController = new DisplayController;
            $DisplayController->displayHome();
        }
        elseif ($_GET['action'] == 'services') {
            $DisplayController = new DisplayController;
            $DisplayController->displayServices();
        }
        elseif ($_GET['action'] == 'quote') {
            $DisplayController = new DisplayController;
            $DisplayController->displayQuote();
        }
        elseif ($_GET['action'] == 'portfolio') {
            $DisplayController = new DisplayController;
            $DisplayController->displayPortfolio();
        }
        elseif ($_GET['action'] == 'portfolio-item') {
            $DisplayController = new DisplayController;
            $DisplayController->displayPortfolioItem();
        }
        elseif ($_GET['action'] == 'about') {
            $DisplayController = new DisplayController;
            $DisplayController->displayAbout();
        }
        elseif ($_GET['action'] == 'contact') {
            $DisplayController = new DisplayController;
            $DisplayController->displayContact();
        }
    }
    //DEFAULT BEHAVIOR
    else {
        $DisplayController = new DisplayController;
        $DisplayController->displayHome();

        }
}

//ERROR BEHAVIOR
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('templates/errorView.php');
}
