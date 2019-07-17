<?php
session_start();
require_once('src/controller/SessionController.php');
require_once('src/controller/DisplayController.php');
require_once('src/controller/MessageController.php');
require_once('src/controller/QuoteController.php');


// require_once('src/model/manager/Manager.php'); //FIXME : a remettre si l'autoload déconne
// require_once('src/model/manager/QuoteManager.php'); //FIXME : a remettre si l'autoload déconne
// require_once('src/model/manager/MessageManager.php'); //FIXME : a remettre si l'autoload déconne

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
            $displayController = new DisplayController;
            $displayController->displayHome();
        }
        elseif ($_GET['action'] == 'services') {
            $displayController = new DisplayController;
            $displayController->displayServices();
        }
        elseif ($_GET['action'] == 'quote') {
            $displayController = new DisplayController;
            $displayController->displayQuote();
        }
        elseif ($_GET['action'] == 'portfolio') {
            $displayController = new DisplayController;
            $displayController->displayPortfolio();
        }
        elseif ($_GET['action'] == 'portfolioItem') {
            $displayController = new DisplayController;
            $displayController->displayPortfolioItem($_GET['item']);
        }
        elseif ($_GET['action'] == 'about') {
            $displayController = new DisplayController;
            $displayController->displayAbout();
        }
        elseif ($_GET['action'] == 'contact') {
            $displayController = new DisplayController;
            $displayController->displayContact();
        }
        elseif ($_GET['action'] == 'termsAndCondition') {
            $displayController = new DisplayController;
            $displayController->displayTerms();
        }
        elseif ($_GET['action'] == 'privacyPolicy') {
            $displayController = new DisplayController;
            $displayController->displayPrivacy();
        }
        elseif ($_GET['action'] == 'canYouFindMyLoginPage') {
            $displayController = new DisplayController;
            $displayController->displayLogIn();
        }
        elseif ($_GET['action'] == 'displayUpdatePass') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $displayController->displayUpdatePass();
        }
        elseif ($_GET['action'] == 'dashboard') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $displayController->displayDashboard();
        }
        elseif ($_GET['action'] == 'packQuotesAdmin') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $quoteController = new QuoteController();
            $quoteController->listPackQuotes();
        }
        elseif ($_GET['action'] == 'customQuotesAdmin') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $quoteController = new QuoteController();
            $quoteController->listCustomQuotes();
        }
        elseif ($_GET['action'] == 'messagesAdmin') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $messageController = new MessageController();
            $messageController->listAllMessages();
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

        //QUOTES MANAGEMENT
        //PACK QUOTES
        elseif ($_GET['action'] == 'sendPackQuote') {
            if (isset($_POST['packName']) && isset($_POST['price']) && isset($_POST['project']) && isset($_POST['structure']) && isset($_POST['company']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['contactEmail']) && isset($_POST['phone']) && isset($_POST['postalAddress']) &&isset($_POST['postCode']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['deadline']) && isset($_POST['messageContent'])) {

                if(empty($_POST['company'])){
                    $_POST['company'] = "";
                }
                if(empty($_POST['phone'])){
                    $_POST['phone'] = "";
                }

                //checking if an attached file has been sent
                if (isset($_FILES['attachedFile']) AND $_FILES['attachedFile']['error'] == 0){

                    //checking its size
                    if ($_FILES['attachedFile']['size'] <= 7000000)
                    {
                        //checking its format
                        $fileIinfo = pathinfo($_FILES['attachedFile']['name']);
                        $extension_upload = $fileIinfo['extension'];
                        $extensions_allowed = array('jpg', 'jpeg', 'png');
                        if (in_array($extension_upload, $extensions_allowed))
                        {
                            // File is stored in uploads folder on server
                            move_uploaded_file($_FILES['attachedFile']['tmp_name'], 'uploads/' . basename($_FILES['attachedFile']['name']));
                        }
                        else {
                            throw new \Exception('Incorrect format. Please use jpg, jpeg or png');
                        }
                    }
                    else {
                        throw new \Exception('The file you uploaded is too big. Please keep it under 7Mo');
                    }
                }


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

        elseif ($_GET['action'] == 'deletePackQuote') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0) {

                $quoteController = new QuoteController;
                $quoteController->deletePackQuote($_GET['packQuoteId']);
            } else {
                throw new Exception('Aucun identifiant de devis envoyé');
            }
        }

        elseif ($_GET['action'] == 'acceptPackQuote') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0 && isset($_GET['acceptPackQuote'])) {

                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyPackQuote($_GET['acceptPackQuote'], $_GET['packQuoteId']);
            } else {
                throw new Exception('Aucun identifiant de devis ou choix envoyé');
            }
        }

        elseif ($_GET['action'] == 'refusePackQuote') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0 && isset($_GET['acceptPackQuote'])) {

                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyPackQuote($_GET['acceptPackQuote'], $_GET['packQuoteId']);


            } else {
                throw new Exception('Aucun identifiant de devis ou choix envoyé');
            }
        }

        elseif ($_GET['action'] == 'updateQuoteStatus') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0 && isset($_POST['statusPackQuote'])) {

                $quoteController = new QuoteController;
                $quoteController->updatePackQuoteStatus($_POST['statusPackQuote'], $_GET['packQuoteId']);
            } else {
                throw new Exception('Aucun identifiant de devis ou choix envoyé');
            }
        }

        //CUSTOM QUOTES
        elseif ($_GET['action'] == 'sendCustomQuote') {
            if (isset($_POST['siteType']) && isset($_POST['price']) && isset($_POST['project']) && isset($_POST['structure']) && isset($_POST['company']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['contactEmail']) && isset($_POST['phone']) && isset($_POST['postalAddress']) &&isset($_POST['postCode']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['messageContent']) && isset($_POST['design']) && isset($_POST['writingContent']) && isset($_POST['visualContent']) && isset($_POST['maintenance']) && isset($_POST['host']) && isset($_POST['domainYN']) && isset($_POST['deadlineSelect']) && isset($_POST['language'])) {

                if(empty($_POST['deadline'])){
                    $_POST['deadline'] = '2999-01-01';
                }

                if(empty($_POST['extensions'])){
                    $_POST['extensions'] = [];
                }

                if(empty($_POST['options'])){
                    $_POST['options'] = [];
                }

                if(empty($_POST['pageNb'])){
                    $_POST['pageNb'] = "";
                }

                if(empty($_POST['loginShowcaseYN'])){
                    $_POST['loginShowcaseYN'] = "";
                }

                if(empty($_POST['paymentShowcaseYN'])){
                    $_POST['paymentShowcaseYN'] = "";
                }

                if(empty($_POST['paymentMtdShowcase'])){
                    $_POST['paymentMtdShowcase'] = [];
                }

                if(empty($_POST['paymentMtdStore'])){
                    $_POST['paymentMtdStore'] = [];
                }

                if(empty($_POST['productNb'])){
                    $_POST['productNb'] = "";
                }

                if(empty($_POST['company'])){
                    $_POST['company'] = "";
                }

                if(empty($_POST['phone'])){
                    $_POST['phone'] = "";
                }

                $quoteController = new QuoteController;

                if( $quoteController->checkCustomQuoteFields($_POST['siteType'], $_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'], $_POST['deadline'], $_POST['messageContent'], $_POST['design'], $_POST['writingContent'], $_POST['visualContent'], $_POST['maintenance'], $_POST['host'], $_POST['domainYN'], $_POST['deadlineSelect'], $_POST['pageNb'], $_POST['loginShowcaseYN'], $_POST['paymentShowcaseYN'], $_POST['productNb'], $_POST['language'], $_POST['extensions'], $_POST['paymentMtdShowcase'], $_POST['options'], $_POST['paymentMtdStore']) == true){

                    $quoteController->saveCustomQuote($_POST['siteType'], $_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'], $_POST['deadline'], $_POST['messageContent'], $_POST['design'], $_POST['writingContent'], $_POST['visualContent'], $_POST['maintenance'], $_POST['host'], $_POST['domainYN'], $_POST['deadlineSelect'], $_POST['pageNb'], $_POST['loginShowcaseYN'], $_POST['paymentShowcaseYN'], $_POST['productNb'], $_POST['language'], $_POST['extensions'], $_POST['paymentMtdShowcase'], $_POST['options'], $_POST['paymentMtdStore']);

                    $quoteController->sendCustomQuote($_POST['siteType'], $_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'], $_POST['deadline'], $_POST['messageContent'], $_POST['design'], $_POST['writingContent'], $_POST['visualContent'], $_POST['maintenance'], $_POST['host'], $_POST['domainYN'], $_POST['deadlineSelect'], $_POST['pageNb'], $_POST['loginShowcaseYN'], $_POST['paymentShowcaseYN'], $_POST['productNb'], $_POST['language'], $_POST['extensions'], $_POST['paymentMtdShowcase'], $_POST['options'], $_POST['paymentMtdStore']);
                }
            }
            else {
                throw new \Exception('Tous les champs ne sont pas remplis');
            }
        }

        elseif ($_GET['action'] == 'deleteCustomQuote') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0) {

                $quoteController = new QuoteController;
                $quoteController->deleteCustomQuote($_GET['customQuoteId']);
            } else {
                throw new Exception('Aucun identifiant de devis envoyé');
            }
        }

        elseif ($_GET['action'] == 'acceptCustomQuote') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0 && isset($_GET['acceptCustomQuote'])) {

                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyCustomQuote($_GET['acceptCustomQuote'], $_GET['customQuoteId']);
            } else {
                throw new Exception('Aucun identifiant de devis ou choix envoyé');
            }
        }

        elseif ($_GET['action'] == 'refuseCustomQuote') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0 && isset($_GET['acceptCustomQuote'])) {

                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyCustomQuote($_GET['acceptCustomQuote'], $_GET['customQuoteId']);


            } else {
                throw new Exception('Aucun identifiant de devis ou choix envoyé');
            }
        }

        elseif ($_GET['action'] == 'updateCustomQuoteStatus') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0 && isset($_POST['statusCustomQuote'])) {

                $quoteController = new QuoteController;
                $quoteController->updateCustomQuoteStatus($_POST['statusCustomQuote'], $_GET['customQuoteId']);
            } else {
                throw new Exception('Aucun identifiant de devis ou choix envoyé');
            }
        }


        //MESSAGES MANAGEMENT

        elseif ($_GET['action'] == 'answerMessage') {
            if (isset($_GET['messageId']) && $_GET['messageId'] > 0) {

                $messageController = new MessageController;
                $messageController->saveAnswer($_GET['messageId'], $_POST['answerContent']);
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);
                $messageController->updateAnswerMessageFlag($_GET['messageId']);
            } else {
                throw new Exception('Aucun identifiant de message envoyé');
            }
        }

        elseif ($_GET['action'] == 'deleteMessage') {
            if (isset($_GET['messageId']) && $_GET['messageId'] > 0) {

                $messageController = new MessageController;
                $messageController->deleteMessage($_GET['messageId']);
            } else {
                throw new Exception('Aucun identifiant de message envoyé');
            }
        }

        elseif ($_GET['action'] == 'archiveMessage') {
            if (isset($_GET['messageId']) && $_GET['messageId'] > 0) {

                $messageController = new MessageController;
                $messageController->archiveMessage($_GET['messageId']);
            } else {
                throw new Exception('Aucun identifiant de message envoyé');
            }
        }

        else {
            throw new \Exception('Cette page n\'existe pas');
        }
    }


    //DEFAULT BEHAVIOR
    else {
        $displayController = new DisplayController;
        $displayController->displayHome();
        }
}

//ERROR BEHAVIOR
catch (\Exception $e) {
    $errorMessage = $e->getMessage();
    require('templates/errorView.php');
}
