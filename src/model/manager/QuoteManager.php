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


    public function getPackQuotes()
    {
        $req = $this->_db->query('SELECT * FROM packquotes ORDER BY requestDate DESC');
        while ($datasPackQuotes = $req->fetch(\PDO::FETCH_ASSOC)) {
            $packQuote[] = new PackQuote($datasPackQuotes);
        }
        if (!empty($packQuote)) { //needed otherwise gives an error on the packQuotesAdmin.php when no pack quote
            return $packQuote;
        }
    }


    public function erasePackQuote($packQuoteId)
    {
        $packQuoteDelete = $this->_db->prepare('DELETE FROM packquotes WHERE id = ?');
        $packQuoteDelete->execute(array($packQuoteId));
    }


    public function acceptPackQuote($accepted, $packQuoteId)
    {
        $req = $this->_db->prepare('UPDATE packquotes SET accepted = ? WHERE id = ?');
        $req->execute(array($accepted, $packQuoteId));
    }

    public function packQuoteStatus($quoteStatus, $packQuoteId)
    {
        $req = $this->_db->prepare('UPDATE packquotes SET quoteStatus = ? WHERE id = ?');
        $req->execute(array($quoteStatus, $packQuoteId));
    }





    //turn quotes icon (menuAdmin) in red if quotes to manage ( if flag == 0 exists at least once)
    public function isThereNewPackQuote()
    {
        $req = $this->_db->query('SELECT quoteStatus FROM packquotes WHERE quoteStatus = 0');
        $isTherePackQuote= $req->fetch();
        return $isTherePackQuote;
    }

}
