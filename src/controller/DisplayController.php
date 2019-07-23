<?php

namespace AlexisGautier\PersonalWebsite\Controller;

use \AlexisGautier\PersonalWebsite\Controller\SessionController;
use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;
use \AlexisGautier\PersonalWebsite\Model\Manager\QuoteManager;

class DisplayController
{
    public function displayCheck()
    {
        $sessionController = new SessionController();
        $cookieOrSessionEmail = $sessionController->checkSession();

        if($sessionController->checkSession() == false){
            throw new \Exception('You cannot access this page');
        }
    }

    public function displayHome()
    {
        require('templates/front/home.php');
    }





    // public function getJsonServices()
    // {
    //     $quoteManager = new QuoteManager();
    //     $allPacks = $quoteManager->displayPacks();
    //     $allPacks = json_encode($allPacks);
    //     echo var_dump($allPacks);
    // }


    // public function getJsonCustom()
    // {
    //     $quoteManager = new QuoteManager();
    //     $allcustomServices = $quoteManager->displayCustomServices();
    //     $allcustomServices = json_encode($allcustomServices);
    //     print_r($allcustomServices);
    // }




    public function displayServices()
    {
        $quoteManager = new QuoteManager();
        $allPacks = $quoteManager->displayPacks();

        //AJAX
        // $allPacks = json_encode($allPacks);
        // echo $allPacks;
        // $json = '[{"idPack":"1","packNameServices":"Showcase Website","packPriceServices":"99"},{"idPack":"2","packNameServices":"Webstore","packPriceServices":"2000"},{"idPack":"3","packNameServices":"Showcase Website + Webstore","packPriceServices":"2500"}]';

        // echo $json;
        // echo var_dump($allPacks);

        require('templates/front/services.php');
    }


    //FIXME : useless si ajax ? 
    public function displayQuote()
    {   
        $quoteManager = new QuoteManager();
        $allCustom = $quoteManager->displayCustomServices();

        require('templates/front/quote.php');
    }

    public function displayPortfolio()
    {
        require('templates/front/portfolio.php');
    }

    public function displayPortfolioItem($portfolioItemName)
    {
        require('templates/portfolio/portfolio-item-' . htmlspecialchars($portfolioItemName) . '.php');
    }

    public function displayAbout()
    {
        require('templates/front/about.php');
    }

    public function displayContact()
    {
        require('templates/front/contact.php');
    }

    public function displayTerms()
    {
        require('templates/front/termsAndConditions.php');
    }

    public function displayPrivacy()
    {
        require('templates/front/privacyPolicy.php');
    }

    public function displayLogIn()
    {
        //messages to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();

        require('templates/admin/logIn.php');
    }

    public function displayUpdatePass()
    {
        //messages to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();

        $sessionController = new SessionController();
        $cookieOrSessionEmail = $sessionController->checkSession();

        require('templates/admin/updatePass.php');
    }

    public function displayDashboard()
    {
        //messages to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();

        require('templates/admin/dashboard.php');
    }

}
