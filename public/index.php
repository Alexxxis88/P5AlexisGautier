<?php
session_start();
require_once('src/controller/DisplayController.php');
require_once('src/controller/MessageController.php');

//AUTOLOAD
function classAutoLoad($class)
{
    require 'src/model/manager/' . $class . '.php';
}
spl_autoload_register('classAutoLoad');


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
        elseif ($_GET['action'] == 'portfolioItem') {
            $DisplayController = new DisplayController;
            $DisplayController->displayPortfolioItem($_GET['item']);
        }
        elseif ($_GET['action'] == 'about') {
            $DisplayController = new DisplayController;
            $DisplayController->displayAbout();
        }
        elseif ($_GET['action'] == 'contact') {
            $DisplayController = new DisplayController;
            $DisplayController->displayContact();
        }
        elseif ($_GET['action'] == 'termsAndCondition') {
            $DisplayController = new DisplayController;
            $DisplayController->displayTerms();
        }
        elseif ($_GET['action'] == 'privacyPolicy') {
            $DisplayController = new DisplayController;
            $DisplayController->displayPrivacy();
        }
        elseif ($_GET['action'] == 'legalNotice') {
            $DisplayController = new DisplayController;
            $DisplayController->displayLegal();
        }


        //SEND MESSAGE
        elseif ($_GET['action'] == 'sendMessage') {
            if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['contactEmail']) && isset($_POST['topic']) && isset($_POST['messageContent'])) {
                $messageController = new MessageController;
                if( $messageController->checkMessageFields($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']) == true){

                    $messageController->saveMessage($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']);

                    $messageController->sendMessage($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']);
                }
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        else {
            throw new Exception('Cette page n\'existe pas');
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