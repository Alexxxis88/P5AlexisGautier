<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;

// require_once('src/model/manager/Manager.php'); // FIXME : a remettre si l'autoload déconne

class QuoteManager extends GlobalManager
{

    //PACK QUOTES
    public function insertNewPackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $imageName)
    {
        $newPackQuoteDb = $this->_db->prepare('INSERT INTO packquotes( packName, price, project, structure, company, firstName, lastName, contactEmail, phone, postalAddress, postCode, city, country, deadline, messageContent, imageName, requestDate ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
        $newPackQuoteDb->execute(array($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $imageName));
    }




    public function displayPacks()
    {
        $req = $this->_db->query('SELECT * FROM packquoteservices');
        $req->execute();

        $packs = array();

        while ($row = $req->fetch(\PDO::FETCH_ASSOC)) {
            $packs[] = $row;

        }
        return $packs;
    }


    // public function displayCustomServices()
    // {
    //     $req = $this->_db->query('SELECT * FROM customquoteservices');
    //     $req->execute();

    //     $customServices = array();

    //     while ($row = $req->fetch(\PDO::FETCH_ASSOC)) {
    //         $customServices[] = $row;

    //     }
    //     return $customServices;
    // }











    public function getPackQuotes($firstItem, $itemsPerPage)
    {
        $req = $this->_db->prepare('SELECT * FROM packquotes ORDER BY requestDate DESC LIMIT ?,?');
        $req->bindValue(1, $firstItem, \PDO::PARAM_INT);
        $req->bindValue(2, $itemsPerPage, \PDO::PARAM_INT);
        $req->execute();

        while ($datasPackQuotes = $req->fetch(\PDO::FETCH_ASSOC)) {
            $packQuote[] = new PackQuote($datasPackQuotes);
        }
        if (!empty($packQuote)) { //needed otherwise gives an error on the packQuotesAdmin.php when no pack quote
            return $packQuote;
        }
    }

    //Pagination
    public function getTotalPagesPackQuotes()
    {
        $req = $this->_db->query('SELECT COUNT(*) AS total_items FROM packquotes');
        $returnTotalPagesPackQuotes= $req->fetch();
        return $returnTotalPagesPackQuotes;
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

    //turn quotes icon (menuAdmin) in red if quotes to manage
    public function isThereNewPackQuote()
    {
        $req = $this->_db->query('SELECT quoteStatus FROM packquotes WHERE quoteStatus = 0');
        $isTherePackQuote= $req->fetch();
        return $isTherePackQuote;
    }

    //CUSTOM QUOTES


    public function checkServicesCustomQuote($serviceName)
    {
        $req = $this->_db->prepare('SELECT * FROM customquoteservices WHERE serviceName = ? ');
        $req->execute(array($serviceName));
        $services= $req->fetch(); 
        return $services;
    }

    public function insertNewCustomQuote($siteType, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $imageName, $design, $writingContent, $visualContent, $maintenance, $host, $domainYN, $deadlineSelect, $pageNb, $loginShowcaseYN, $paymentShowcaseYN, $productNb, $languages, $extensions, $paymentMtdShowcase, $options, $paymentMtdStore)
    {
        $newCustomQuoteDb = $this->_db->prepare('INSERT INTO customquotes( siteType, price, project, structure, company, firstName, lastName, contactEmail, phone, postalAddress, postCode, city, country, deadline, messageContent, imageName, design, writingContent, visualContent, maintenance, host, domainYN, deadlineSelect, pageNb, loginShowcaseYN, paymentShowcaseYN, productNb, requestDate, languages, extensions, paymentMtdShowcase, options, paymentMtdStore  ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?)');
        $newCustomQuoteDb->execute(array($siteType, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $imageName, $design, $writingContent, $visualContent, $maintenance, $host, $domainYN, $deadlineSelect, $pageNb, $loginShowcaseYN, $paymentShowcaseYN, $productNb, $languages, $extensions, $paymentMtdShowcase, $options, $paymentMtdStore));
    }

    public function getCustomQuotes($firstItem, $itemsPerPage)
    {
        $req = $this->_db->prepare('SELECT * FROM customquotes ORDER BY requestDate DESC LIMIT ?,?');
        $req->bindValue(1, $firstItem, \PDO::PARAM_INT);
        $req->bindValue(2, $itemsPerPage, \PDO::PARAM_INT);
        $req->execute();

        while ($datasCustomQuotes = $req->fetch(\PDO::FETCH_ASSOC)) {
            $customQuote[] = new CustomQuote($datasCustomQuotes);
        }
        if (!empty($customQuote)) { //needed otherwise gives an error on the customQuotesAdmin.php when no custom quote
            return $customQuote;
        }
    }

    //Pagination
    public function getTotalPagesCustomQuotes()
    {
        $req = $this->_db->query('SELECT COUNT(*) AS total_items FROM customquotes');
        $returnTotalPagesCustomQuotes= $req->fetch();
        return $returnTotalPagesCustomQuotes;
    }

    public function eraseCustomQuote($customQuoteId)
    {
        $customQuoteDelete = $this->_db->prepare('DELETE FROM customquotes WHERE id = ?');
        $customQuoteDelete->execute(array($customQuoteId));
    }


    public function acceptCustomQuote($accepted, $customQuoteId)
    {
        $req = $this->_db->prepare('UPDATE customquotes SET accepted = ? WHERE id = ?');
        $req->execute(array($accepted, $customQuoteId));
    }

    public function customQuoteStatus($quoteStatus, $customQuoteId)
    {
        $req = $this->_db->prepare('UPDATE customquotes SET quoteStatus = ? WHERE id = ?');
        $req->execute(array($quoteStatus, $customQuoteId));
    }

    //turn quotes icon (menuAdmin) in red if quotes to manage
    public function isThereNewCustomQuote()
    {
        $req = $this->_db->query('SELECT quoteStatus FROM customquotes WHERE quoteStatus = 0');
        $isThereCustomQuote= $req->fetch();
        return $isThereCustomQuote;
    }

    //GENERAL
    //FIXME : mettre chaque methode dans son block

    public function getPackServices()
    {
        $req = $this->_db->query('SELECT * FROM packquoteservices');
        $allPackServices= $req->fetch();
        return $allPackServices;
    }

    //FIXME : mettre chaque methode dans son block
    public function newPackPrice($price, $idPack)
    {
        $req = $this->_db->prepare('UPDATE packquoteservices SET packPriceServices = ? WHERE idPack = ?');
        $req->execute(array($price, $idPack));
    }


    //FIXME : mettre chaque methode dans son block

    public function newCustomPrice($price, $idServ)
    {
        $req = $this->_db->prepare('UPDATE customquoteservices SET price = ? WHERE idServ = ?');
        $req->execute(array($price, $idServ));
    }
}
