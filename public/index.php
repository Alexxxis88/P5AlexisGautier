<?php
session_start();
require_once('src/controller/DisplayController.php');
require_once('src/controller/FormController.php');

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
            //testing if all fields a filled
            if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['contactEmail']) && isset($_POST['topic']) && isset($_POST['messageContent'])) {

                $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";

                //testing if firstName only has authorised caracters
                if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['firstName'])) {
                    //testing if lastName only has authorised caracters
                    if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['lastName'])) {
                        //testing if email is conform
                        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['contactEmail'])) {
                            //testing if topic is conform
                            if (preg_match("#^[a-z". $accentedCharacters ."(' \-)*]+[a-z". $accentedCharacters ."]+$#i", $_POST['topic'])) {
                                $formController = new FormController;

                                $formController->saveMessage($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']);

                                $formController->sendMessage($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']);



                            } else {
                                throw new Exception('L\'intitulé n\'est pas conforme');
                            }
                        } else {
                            throw new Exception('L\'adresse email n\'est pas conforme');
                        }
                    } else {
                        throw new Exception('Le nom n\'est pas conforme.');
                    }
                } else {
                    throw new Exception('Le prénom n\'est pas conforme.');
                }
            } else {
                throw new Exception('Il manque des informations.');
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
