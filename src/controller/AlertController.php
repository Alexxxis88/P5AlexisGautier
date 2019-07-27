<?php

namespace AlexisGautier\PersonalWebsite\Controller;

use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;
use \AlexisGautier\PersonalWebsite\Model\Manager\QuoteManager;

class AlertController
{
    public function alertIcons()
    {
        //messages to manage red icon
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();

        $arrayAlert = [];
        array_push($arrayAlert, $isThereNewMessages, $isThereNewPackQuotes, $isThereNewCustomQuotes);
        return $arrayAlert;
    }
}
