<?php
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

    public function displayPortfolioItem()
    {
        require('templates/front/portfolio-item-bicloo.php');
    }

    public function displayAbout()
    {
        require('templates/front/about.php');
    }

    public function displayContact()
    {
        require('templates/front/contact.php');
    }

}
