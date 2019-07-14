<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;

// require_once('src/model/manager/Manager.php'); // FIXME : a remettre si l'autoload déconne

class QuoteManager extends Manager
{

    public function insertNewPackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $newPackQuoteDb = $this->_db->prepare('INSERT INTO packquotes( packName, price, project, structure, company, firstName, lastName, contactEmail, phone, postalAddress, postCode, city, country, deadline, messageContent, requestDate ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
        $newPackQuoteDb->execute(array($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent));
    }
}
