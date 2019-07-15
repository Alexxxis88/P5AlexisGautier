<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;


class PackQuote
{
    private $_id ;
    private $_packName ;
    private $_price ;
    private $_requestDate ;
    private $_project ;
    private $_structure ;
    private $_company ;
    private $_firstName ;
    private $_lastName ;
    private $_contactEmail ;
    private $_phone ;
    private $_postalAddress ;
    private $_postCode ;
    private $_city ;
    private $_country ;
    private $_deadline ;
    private $_messageContent ;
    private $_answered ;
    private $_quoteStatus ;
    private $_accepted ;
    private $_clientStatus ;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function id()
    {
        return $this->_id;
    }
    public function packName()
    {
        return $this->_packName;
    }
    public function price()
    {
        return $this->_price;
    }
    public function requestDate()
    {
        return $this->_requestDate;
    }
    public function project()
    {
        return $this->_project;
    }
    public function structure()
    {
        return $this->_structure;
    }
    public function company()
    {
        return $this->_company;
    }
    public function firstName()
    {
        return $this->_firstName;
    }
    public function lastName()
    {
        return $this->_lastName;
    }
    public function contactEmail()
    {
        return $this->_contactEmail;
    }
    public function phone()
    {
        return $this->_phone;
    }
    public function postalAddress()
    {
        return $this->_postalAddress;
    }
    public function postCode()
    {
        return $this->_postCode;
    }
    public function city()
    {
        return $this->_city;
    }
    public function country()
    {
        return $this->_country;
    }
    public function deadline()
    {
        return $this->_deadline;
    }
    public function messageContent()
    {
        return $this->_messageContent;
    }
    public function answered()
    {
        return $this->_answered;
    }
    public function quoteStatus()
    {
        return $this->_quoteStatus;
    }
    public function accepted()
    {
        return $this->_accepted;
    }
    public function clientStatus()
    {
        return $this->_clientStatus;
    }


    //SETTERS
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setPackName($packName)
    {
        if (is_string($packName)) {
            $this->_packName = $packName;
        }
    }

    public function setPrice($price)
    {
        $price = (int) $price;
        if ($price >= 0) {
            $this->_price = $price;
        }
    }

    public function setRequestDate($requestDate)
    {
        $this->_requestDate = $requestDate;
    }

    public function setProject($project)
    {
        if (is_string($project)) {
            $this->_project = $project;
        }
    }

    public function setStructure($structure)
    {
        if (is_string($structure)) {
            $this->_structure = $structure;
        }
    }

    public function setCompany($company)
    {
        if (is_string($company)) {
            $this->_company = $company;
        }
    }

    public function setFirstName($firstName)
    {
        if (is_string($firstName)) {
            $this->_firstName = $firstName;
        }
    }

    public function setLastName($lastName)
    {
        if (is_string($lastName)) {
            $this->_lastName = $lastName;
        }
    }

    public function setContactEmail($contactEmail)
    {
        if (is_string($contactEmail)) {
            $this->_contactEmail = $contactEmail;
        }
    }

    public function setPhone($phone)
    {
        if (is_string($phone)) {
            $this->_phone = $phone;
        }
    }

    public function setPostalAddress($postalAddress)
    {
        if (is_string($postalAddress)) {
            $this->_postalAddress = $postalAddress;
        }
    }

    public function setPostCode($postCode)
    {
        if (is_string($postCode)) {
            $this->_postCode = $postCode;
        }
    }

    public function setCity($city)
    {
        if (is_string($city)) {
            $this->_city = $city;
        }
    }

    public function setCountry($country)
    {
        if (is_string($country)) {
            $this->_country = $country;
        }
    }

    public function setDeadline($deadline)
    {
        $this->_deadline = $deadline;
    }

    public function setMessageContent($messageContent)
    {
        if (is_string($messageContent)) {
            $this->_messageContent = $messageContent;
        }
    }

    public function setAnswered($answered)
    {
        $answered = (int) $answered;
        if ($answered >= 0) {
            $this->_answered = $answered;
        }
    }

    public function setQuoteStatus($quoteStatus)
    {
        $quoteStatus = (int) $quoteStatus;
        if ($quoteStatus >= 0) {
            $this->_quoteStatus = $quoteStatus;
        }
    }

    public function setAccepted($accepted)
    {
        $accepted = (int) $accepted;
        if ($accepted >= 0) {
            $this->_accepted = $accepted;
        }
    }

    public function setClientStatus($clientStatus)
    {
        $clientStatus = (int) $clientStatus;
        if ($clientStatus >= 0) {
            $this->_clientStatus = $clientStatus;
        }
    }
}
