<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;


class CustomQuote
{
    private $_id ;
    private $_siteType ;
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
    private $_imageName ;
    private $_languages ;
    private $_design ;
    private $_writingContent ;
    private $_visualContent ;
    private $_maintenance ;
    private $_host ;
    private $_domainYN ;
    private $_extensions ;
    private $_deadlineSelect ;
    private $_pageNb ;
    private $_loginShowcaseYN ;
    private $_paymentShowcaseYN ;
    private $_paymentMtdShowcase ;
    private $_options ;
    private $_productNb ;
    private $_paymentMtdStore ;
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
    public function siteType()
    {
        return $this->_siteType;
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
    public function imageName()
    {
        return $this->_imageName;
    }
    public function languages()
    {
        return $this->_languages;
    }
    public function design()
    {
        return $this->_design;
    }
    public function writingContent()
    {
        return $this->_writingContent;
    }
    public function visualContent()
    {
        return $this->_visualContent;
    }
    public function maintenance()
    {
        return $this->_maintenance;
    }
    public function host()
    {
        return $this->_host;
    }
    public function domainYN()
    {
        return $this->_domainYN;
    }
    public function extensions()
    {
        return $this->_extensions;
    }
    public function deadlineSelect()
    {
        return $this->_deadlineSelect;
    }
    public function pageNb()
    {
        return $this->_pageNb;
    }
    public function loginShowcaseYN()
    {
        return $this->_loginShowcaseYN;
    }
    public function paymentShowcaseYN()
    {
        return $this->_paymentShowcaseYN;
    }
    public function paymentMtdShowcase()
    {
        return $this->_paymentMtdShowcase;
    }
    public function options()
    {
        return $this->_options;
    }
    public function productNb()
    {
        return $this->_productNb;
    }
    public function paymentMtdStore()
    {
        return $this->_paymentMtdStore;
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

    public function setSiteType($siteType)
    {
        if (is_string($siteType)) {
            $this->_siteType = $siteType;
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

    public function setImageName($imageName)
    {
        if (is_string($imageName)) {
            $this->_imageName = $imageName;
        }
    }

    public function setLanguages($languages)
    {
        if (is_string($languages)) {
            $this->_languages = $languages;
        }
    }

    public function setDesign($design)
    {
        if (is_string($design)) {
            $this->_design = $design;
        }
    }

    public function setWritingContent($writingContent)
    {
        if (is_string($writingContent)) {
            $this->_writingContent = $writingContent;
        }
    }

    public function setVisualContent($visualContent)
    {
        if (is_string($visualContent)) {
            $this->_visualContent = $visualContent;
        }
    }

    public function setMaintenance($maintenance)
    {
        if (is_string($maintenance)) {
            $this->_maintenance = $maintenance;
        }
    }

    public function setHost($host)
    {
        if (is_string($host)) {
            $this->_host = $host;
        }
    }

    public function setDomainYN($domainYN)
    {
        if (is_string($domainYN)) {
            $this->_domainYN = $domainYN;
        }
    }

    public function setExtensions($extensions)
    {
        if (is_string($extensions)) {
            $this->_extensions = $extensions;
        }
    }

    public function setDeadlineSelect($deadlineSelect)
    {
        if (is_string($deadlineSelect)) {
            $this->_deadlineSelect = $deadlineSelect;
        }
    }

    public function setPageNb($pageNb)
    {
        if (is_string($pageNb)) {
            $this->_pageNb = $pageNb;
        }
    }

    public function setLoginShowcaseYN($loginShowcaseYN)
    {
        if (is_string($loginShowcaseYN)) {
            $this->_loginShowcaseYN = $loginShowcaseYN;
        }
    }

    public function setPaymentShowcaseYN($paymentShowcaseYN)
    {
        if (is_string($paymentShowcaseYN)) {
            $this->_paymentShowcaseYN = $paymentShowcaseYN;
        }
    }

    public function setPaymentMtdShowcase($paymentMtdShowcase)
    {
        if (is_string($paymentMtdShowcase)) {
            $this->_paymentMtdShowcase = $paymentMtdShowcase;
        }
    }

    public function setOptions($options)
    {
        if (is_string($options)) {
            $this->_options = $options;
        }
    }

    public function setProductNb($productNb)
    {
        if (is_string($productNb)) {
            $this->_productNb = $productNb;
        }
    }

    public function setPaymentMtdStore($paymentMtdStore)
    {
        if (is_string($paymentMtdStore)) {
            $this->_paymentMtdStore = $paymentMtdStore;
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
