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

        require('templates/front/services.php');
    }


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
        $alertController = new AlertController();
        $arrayAlert = $alertController->alertIcons();

        require('templates/admin/logIn.php');
    }

    public function displayUpdatePass()
    {
        $alertController = new AlertController();
        $arrayAlert = $alertController->alertIcons();

        $sessionController = new SessionController();
        $cookieOrSessionEmail = $sessionController->checkSession();

        require('templates/admin/updatePass.php');
    }
}
