<?php
session_start();

use \AlexisGautier\PersonalWebsite\Controller\SessionController;
use \AlexisGautier\PersonalWebsite\Controller\DisplayController;
use \AlexisGautier\PersonalWebsite\Controller\MessageController;
use \AlexisGautier\PersonalWebsite\Controller\QuoteController;

//AUTOLOAD
function classAutoLoad($class)
{
    $parts = explode('\\', $class);
    $myclass =  end($parts) . '.php';
    if(strpos($myclass, 'Controller')){
        require 'src/controller/' . $myclass;
    }
    elseif(strpos($myclass, 'Manager')){
        require 'src/model/manager/' . $myclass;
    }
    else{
        require 'src/model/entity/' . $myclass;
    };
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

            //Confirmation message quote request sent
            if (isset($_GET['success']) and $_GET['success'] == 1) {
                include('templates/success-messages/success1.html');
            }
        }
        elseif ($_GET['action'] == 'quote') {
            $displayController = new DisplayController;
            $displayController->displayQuote();

            //Confirmation message quote request sent
            if (isset($_GET['success']) and $_GET['success'] == 1) {
                include('templates/success-messages/success1.html');
            }
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

            //Confirmation message message sent
            if (isset($_GET['success']) and $_GET['success'] == 3) {
                include('templates/success-messages/success3.html');
            }
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

            //Confirmation message updating password
            if (isset($_GET['success']) and $_GET['success'] == 2) {
                include('templates/success-messages/success2.html');
            }
        }
        elseif ($_GET['action'] == 'displayUpdatePass') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $displayController->displayUpdatePass();
        }
        elseif ($_GET['action'] == 'servicesList') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            $quoteController = new QuoteController();
            $quoteController->listServices();
        }
        elseif ($_GET['action'] == 'packQuotesAdmin') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            if (!isset($_GET['page']) or !isset($_GET['sortBy']) or $_GET['page']<1 or $_GET['sortBy']<1) {
                throw new Exception('Page number or sort by number is missing');
            } else {
                $quoteController = new QuoteController();
                $quoteController->listPackQuotes();
            }
        }
        elseif ($_GET['action'] == 'customQuotesAdmin') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            if (!isset($_GET['page']) or !isset($_GET['sortBy']) or $_GET['page']<1 or $_GET['sortBy']<1) {
                throw new Exception('Page number or sort by number is missing');
            } else {
                $quoteController = new QuoteController();
                $quoteController->listCustomQuotes();
            }
        }
        elseif ($_GET['action'] == 'messagesAdmin') {
            $displayController = new DisplayController;
            $displayController->displayCheck();
            if (!isset($_GET['page']) or !isset($_GET['sortBy']) or $_GET['page']<1 or $_GET['sortBy']<1) {
                throw new Exception('Page number or sort by number is missing');
            } else {
                $messageController = new MessageController();
                $messageController->listAllMessages();
            }
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
                throw new \Exception('Check your login information');
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
                throw new \Exception('You are already logged off');
            }
        }

        //UPDATE PASSWORD
        elseif ($_GET['action'] == 'UpdatePass') {
            if ((isset($_COOKIE['email']) and $_COOKIE['email'] != '') or  (isset($_SESSION['email']) and $_SESSION['email'] != '')) {

                if( $sessionController->checkNewPassValidity($_POST['newPass']) == true){
                    $_POST['newPass'] = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
                    $sessionController->UpdatePassWord($_POST['newPass'], $_POST['emailNewPass']);
                    $sessionController->killSession();

                    header('Location: index.php?action=canYouFindMyLoginPage&success=2');
                    exit;
                }
            }
            else {
                throw new \Exception('You have to be logged in to access this page');
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
                throw new \Exception('Some fields are empty');
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

                $quoteController = new QuoteController;

                if( $quoteController->checkPackQuoteFields($_POST['packName'],$_POST['price'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'],$_POST['deadline'], $_POST['messageContent']) == true){

                    //sending image to server, if any
                    $imageName =  $quoteController->imageQuote();

                    //getting the right information from the verified array retrieved from DB
                    $arrayPackServices =  $quoteController->servicesPackQuote($_POST['packName']);
                    $packName = $arrayPackServices[1];
                    $price = $arrayPackServices[2];

                    $quoteController->savePackQuote($packName, $price, $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'],$_POST['deadline'], $_POST['messageContent'], $imageName);

                    $quoteController->sendPackQuote($packName, $price, $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'],$_POST['deadline'], $_POST['messageContent']);
                }
            }
            else {
                throw new \Exception('Some fields are empty');
            }
        }

        elseif ($_GET['action'] == 'deletePackQuote') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0) {

                $quoteController = new QuoteController;
                $quoteController->deletePackQuote($_GET['packQuoteId']);
            } else {
                throw new Exception('Missing invoice id');
            }
        }

        elseif ($_GET['action'] == 'acceptPackQuote') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0 && isset($_GET['acceptPackQuote'])) {

                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyPackQuote($_GET['acceptPackQuote'], $_GET['packQuoteId']);
            } else {
                throw new Exception('Missing invoice id or choice');
            }
        }

        elseif ($_GET['action'] == 'refusePackQuote') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0 && isset($_GET['acceptPackQuote'])) {

                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyPackQuote($_GET['acceptPackQuote'], $_GET['packQuoteId']);
            } else {
                throw new Exception('Missing invoice id or choice');
            }
        }

        elseif ($_GET['action'] == 'updateQuoteStatus') {
            if (isset($_GET['packQuoteId']) && $_GET['packQuoteId'] > 0 && isset($_POST['statusPackQuote'])) {

                $quoteController = new QuoteController;
                $quoteController->updatePackQuoteStatus($_POST['statusPackQuote'], $_GET['packQuoteId']);
            } else {
                throw new Exception('Missing invoice id or choice');
            }
        }

        elseif ($_GET['action'] == 'updatePackPrice') {

            $quoteController = new QuoteController;
            $quoteController->updatePackPrice($_POST['price'], $_POST['idPack'] );
        }

        //CUSTOM QUOTES
        elseif ($_GET['action'] == 'sendCustomQuote') {
            if (isset($_POST['siteType']) && isset($_POST['arrayServices']) && isset($_POST['project']) && isset($_POST['structure']) && isset($_POST['company']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['contactEmail']) && isset($_POST['phone']) && isset($_POST['postalAddress']) &&isset($_POST['postCode']) && isset($_POST['city']) && isset($_POST['country']) && isset($_POST['messageContent']) && isset($_POST['design']) && isset($_POST['writingContent']) && isset($_POST['visualContent']) && isset($_POST['maintenance']) && isset($_POST['host']) && isset($_POST['domainYN']) && isset($_POST['deadlineSelect']) && isset($_POST['language'])) {

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

                if( $quoteController->checkCustomQuoteFields($_POST['siteType'], $_POST['arrayServices'], $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'], $_POST['deadline'], $_POST['messageContent'], $_POST['design'], $_POST['writingContent'], $_POST['visualContent'], $_POST['maintenance'], $_POST['host'], $_POST['domainYN'], $_POST['deadlineSelect'], $_POST['pageNb'], $_POST['loginShowcaseYN'], $_POST['paymentShowcaseYN'], $_POST['productNb'], $_POST['language'], $_POST['extensions'], $_POST['paymentMtdShowcase'], $_POST['options'], $_POST['paymentMtdStore']) == true)
                {
                    //sending image to server, if any
                    $imageName =  $quoteController->imageQuote();

                    //getting the right information from the verified array retrieved from DB
                    $arrayServices =  $quoteController->servicesCustomQuote($_POST['arrayServices']);
                    $price = $arrayServices[0];
                    $siteType = $arrayServices[1];
                    $design =  $arrayServices[2];
                    $writingContent = $arrayServices[3];
                    $visualContent = $arrayServices[4];
                    $maintenance = $arrayServices[5];
                    $host = $arrayServices[6];
                    $deadlineSelect = $arrayServices[7];
                    $pageNb = $arrayServices[8];
                    $loginShowcaseYN = $arrayServices[9];
                    $productNb = $arrayServices[10];

                    $quoteController->saveCustomQuote($siteType,  $price, $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'], $_POST['deadline'], $_POST['messageContent'], $imageName, $design, $writingContent, $visualContent, $maintenance, $host, $_POST['domainYN'], $deadlineSelect, $pageNb, $loginShowcaseYN, $_POST['paymentShowcaseYN'], $productNb, $_POST['language'], $_POST['extensions'], $_POST['paymentMtdShowcase'], $_POST['options'], $_POST['paymentMtdStore']);

                    $quoteController->sendCustomQuote($siteType,  $price, $_POST['project'], $_POST['structure'], $_POST['company'], $_POST['firstName'], $_POST['lastName'], $_POST['contactEmail'], $_POST['phone'], $_POST['postalAddress'],$_POST['postCode'], $_POST['city'], $_POST['country'], $_POST['deadline'], $_POST['messageContent'], $design, $writingContent, $visualContent, $maintenance, $host, $_POST['domainYN'], $deadlineSelect, $pageNb, $loginShowcaseYN, $_POST['paymentShowcaseYN'], $productNb, $_POST['language'], $_POST['extensions'], $_POST['paymentMtdShowcase'], $_POST['options'], $_POST['paymentMtdStore']);
                    }
            }
            else {
                throw new \Exception('Some fields are empty');
            }
        }

        elseif ($_GET['action'] == 'deleteCustomQuote') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0) {

                $quoteController = new QuoteController;
                $quoteController->deleteCustomQuote($_GET['customQuoteId']);
            } else {
                throw new Exception('Missing invoice id');
            }
        }

        elseif ($_GET['action'] == 'acceptCustomQuote') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0 && isset($_GET['acceptCustomQuote']))
            {
                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyCustomQuote($_GET['acceptCustomQuote'], $_GET['customQuoteId']);
            } else {
                throw new Exception('Missing invoice id or choice');
            }
        }

        elseif ($_GET['action'] == 'refuseCustomQuote') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0 && isset($_GET['acceptCustomQuote']))
            {
                $messageController = new MessageController;
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);

                $quoteController = new QuoteController;
                $quoteController->acceptDenyCustomQuote($_GET['acceptCustomQuote'], $_GET['customQuoteId']);
            } else {
                throw new Exception('Missing invoice id or choice');
            }
        }

        elseif ($_GET['action'] == 'updateCustomQuoteStatus') {
            if (isset($_GET['customQuoteId']) && $_GET['customQuoteId'] > 0 && isset($_POST['statusCustomQuote'])) {

                $quoteController = new QuoteController;
                $quoteController->updateCustomQuoteStatus($_POST['statusCustomQuote'], $_GET['customQuoteId']);
            } else {
                throw new Exception('Missing invoice id or choice');
            }
        }

        elseif ($_GET['action'] == 'updateCustomPrice') {

                $quoteController = new QuoteController;
                $quoteController->updateCustomPrice($_POST['price'], $_POST['idServ'] );
        }


        //MESSAGES MANAGEMENT
        elseif ($_GET['action'] == 'answerMessage') {
            if (isset($_GET['messageId']) && $_GET['messageId'] > 0) {

                $messageController = new MessageController;
                $messageController->saveAnswer($_GET['messageId'], $_POST['answerContent']);
                $messageController->sendAnswer($_POST['clientEmail'], $_POST['answerTopic'], $_POST['answerContent']);
                $messageController->updateAnswerMessageFlag($_GET['messageId']);
            } else {
                throw new Exception('Missing message id');
            }
        }

        elseif ($_GET['action'] == 'deleteMessage') {
            if (isset($_GET['messageId']) && $_GET['messageId'] > 0) {

                $messageController = new MessageController;
                $messageController->deleteMessage($_GET['messageId']);
            } else {
                throw new Exception('Missing message id');
            }
        }

        elseif ($_GET['action'] == 'archiveMessage') {
            if (isset($_GET['messageId']) && $_GET['messageId'] > 0) {

                $messageController = new MessageController;
                $messageController->archiveMessage($_GET['messageId']);
            } else {
                throw new Exception('Missing message id');
            }
        }

        else {
            throw new \Exception('This page doesn\'t exist');
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
