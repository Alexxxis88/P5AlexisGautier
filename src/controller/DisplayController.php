<?php

namespace AlexisGautier\PersonalWebsite\Controller;

class DisplayController
{
    public function displayHome()
    {
        require('templates/front/home.php');
    }

    public function displayServices()
    {
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

    public function displayLegal()
    {
        require('templates/front/legalNotice.php');
    }

}
