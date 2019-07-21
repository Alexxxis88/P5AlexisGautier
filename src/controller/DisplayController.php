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










    public function displayServices()
    {
        $quoteManager = new QuoteManager();
        $allPacks = $quoteManager->displayPacks();
        echo var_dump(json_encode($allPacks));
        echo var_dump(json_encode($allPacks));
        require('templates/front/services.php');
    }


    

    public function displayQuote()
    {
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
