<?php
session_start();
require_once('src/controller/SessionController.php');
require_once('src/controller/DisplayController.php');
require_once('src/controller/MessageController.php');
require_once('src/controller/QuoteController.php');


// require_once('src/model/manager/Manager.php'); FIXME : a remettre si l'autoload déconne
// require_once('src/model/manager/QuoteManager.php'); FIXME : a remettre si l'autoload déconne
// require_once('src/model/manager/MessageManager.php'); FIXME : a remettre si l'autoload déconne

use \AlexisGautier\PersonalWebsite\Controller\SessionController;
use \AlexisGautier\PersonalWebsite\Controller\DisplayController;
use \AlexisGautier\PersonalWebsite\Controller\MessageController;
use \AlexisGautier\PersonalWebsite\Controller\QuoteController;


//AUTOLOAD
function classAutoLoad($class)
{
    $parts = explode('\\', $class);
    require 'src/model/manager/' . end($parts) . '.php';
}
spl_autoload_register('classAutoLoad');



try {
    if (isset($_GET['action'])) {

        $sessionController = new SessionController();
        $sessionController->checkSession();


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
        elseif ($_GET['action'] == 'canYouFindMyLoginPage') {
            $DisplayController = new DisplayController;
            $DisplayController->displayLogIn();
        }
        elseif ($_GET['action'] == 'displayUpdatePass') {
            $DisplayController = new DisplayController;
            $DisplayController->displayUpdatePass();
        }
        elseif ($_GET['action'] == 'dashboard') {
            $DisplayController = new DisplayController;
            $DisplayController->displayDashboard();
        }
        elseif ($_GET['action'] == 'quotesAdmin') {
            $DisplayController = new DisplayController;
            $DisplayController->displayQuotesAdmin();
        }
        elseif ($_GET['action'] == 'messagesAdmin') {
            $DisplayController = new DisplayController;
            $DisplayController->displayMessagesAdmin();
        }

        //LOG IN
        elseif ($_GET['action'] == 'logInCheck') {
            if (isset($_POST['email']) && isset($_POST['pass'])) {
                $sessionController = new SessionController;
                $sessionController->checkLog($_POST['email']);

                if (isset($_SESSION['id']) AND isset($_SESSION['email'])) {
                    require('templates/admin/dashboard.php');
                }
            } else {
                throw new \Exception('Vérifiez vos identifiants de connexion');
            }
        }

        //LOG OUT
        elseif ($_GET['action'] == 'logOutCheck') {
            if (isset($_SESSION['id']) OR isset($_COOKIE['id'])) {
                $sessionController = new SessionController;
                $sessionController->killSession();

                header('Location: index.php');
                exit;

            } else {
                throw new \Exception('Vous êtes déja déconnecté');
            }
        }

        //UPDATE PASSWORD
        elseif ($_GET['action'] == 'UpdatePass') {
            if ((isset($_COOKIE['email']) and $_COOKIE['email'] != '') or  (isset($_SESSION['email']) and $_SESSION['email'] != '')) {

                if( $sessionController->checkNewPassValidity($_POST['newPass']) == true){
                    $_POST['newPass'] = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
                    $sessionController->UpdatePassWord($_POST['newPass'], $_POST['emailNewPass']);
                    $sessionController->killSession();

                    header('Location: index.php?action=quote');
                    exit;
                }
            }
            else {
                throw new \Exception('Vous devez être connecté pour accéder à cette page');
            }
        }

        //SEND MESSAGE
        elseif ($_GET['action'] == 'sendMessage') {
            if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['contactEmail']) && !empty($_POST['topic']) && !empty($_POST['messageContent'])) {
                $messageController = new MessageController;
                if( $messageController->checkMessageFields($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']) == true){

                    $messageController->saveMessage($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']);

                    $messageController->sendMessage($_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['topic'], $_POST['messageContent']);
                }
            }
            else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }

        //SEND PACK QUOTE
        elseif ($_GET['action'] == 'sendPackQuote') {
            if (!empty($_POST['packName']) && !empty($_POST['price']) && !empty($_POST['project']) && !empty($_POST['structure']) && isset($_POST['company']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['contactEmail']) && !empty($_POST['phone']) && !empty($_POST['postalAddress']) &&!empty($_POST['postCode']) && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['deadline']) && !empty($_POST['messageContent'])) {

                $quoteController = new QuoteController;

                if( $quoteController->checkPackQuoteFields($_POST['packName'],$_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'],$_POST['deadline'], $_POST['messageContent']) == true){

                    $quoteController->savePackQuote($_POST['packName'],$_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'],$_POST['deadline'], $_POST['messageContent']);

                    $quoteController->sendPackQuote($_POST['packName'],$_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'],$_POST['deadline'], $_POST['messageContent']);
                }
            }
            else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }






























        else {
            throw new \Exception('Cette page n\'existe pas');
        }
    }


    //DEFAULT BEHAVIOR
    else {
        $DisplayController = new DisplayController;
        $DisplayController->displayHome();
        }
}

//ERROR BEHAVIOR
catch (\Exception $e) {
    $errorMessage = $e->getMessage();
    require('templates/errorView.php');
}
