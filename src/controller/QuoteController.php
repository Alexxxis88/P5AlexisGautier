<?php

namespace AlexisGautier\PersonalWebsite\Controller;

// require_once('src/model/manager/QuoteManager.php'); FIXME : a remettre si l'autoload déconne
use \AlexisGautier\PersonalWebsite\Model\Manager\QuoteManager;
use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;


class QuoteController
{
    //PACK QUOTES
    public function savePackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->insertNewPackQuote(htmlspecialchars($packName), htmlspecialchars($price), htmlspecialchars($project), htmlspecialchars($structure), htmlspecialchars($company), htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($phone), htmlspecialchars($postalAddress), htmlspecialchars($postCode), htmlspecialchars($city), htmlspecialchars($country), htmlspecialchars($deadline), htmlspecialchars($messageContent));

        // header('Location: index.php?action=services#pricing'); FIXME: ne pas le mettre sinon ça risque de bloquer sendpackQuotes ? pourtant ça fonctionnait en le laissant

    }

    public function sendPackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        date_default_timezone_set("Europe/Paris");
        $to  = 'xmailpoubelle@gmail.com, '. htmlspecialchars($contactEmail) . '';
        $topic = 'Quote resquest for a ' . htmlspecialchars($packName);
        $message = '
        <html>
            <body>
                <h2>Quote resquest for a <strong>' . htmlspecialchars($packName) . '</strong></h2>
                <p>Project name : <strong>' . htmlspecialchars($project) . '</strong></p>
                <p>Structure : <strong>' . htmlspecialchars($structure) . '</strong></p>
                <p>Compagny : <strong>' . htmlspecialchars($company) . '</strong></p>
                <p>Full name : <strong>' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . '</strong></p>
                <p>Email address : <strong>' . htmlspecialchars($contactEmail) . '</strong></p>
                <p>Phone number : <strong>' . htmlspecialchars($phone) . '</strong></p>
                <p>Address : <strong>' . htmlspecialchars($postalAddress) . '</strong></p>
                <p>Post Code : <strong>' . htmlspecialchars($postCode) . '</strong></p>
                <p>City : <strong>' . htmlspecialchars($city) . '</strong></p>
                <p>Country : <strong>' . htmlspecialchars($country) . '</strong></p>
                <p>Deadline : <strong>' . htmlspecialchars($deadline) . '</strong></p>
                <p>Project description : ' . htmlspecialchars($messageContent) . ' </p>
                <p>Total Price :<strong>' . htmlspecialchars($price) . ' €</strong></p>
                <p>Quote request made by email on ' . date("d-m-Y") . ' at ' . date("G:i") . ' </p>
            </body>
        </html>
        ';
        // Headers Content-type must be defined to send an HTML email
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'From: ' . htmlspecialchars($firstName) . ' '. htmlspecialchars($lastName) . '<'. htmlspecialchars($contactEmail) . '>';
        mail($to, $topic, $message, implode("\r\n", $headers));

        header('Location: index.php');
    }


    public function checkPackQuoteFields($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";
        //testing if packname is correct and matching the price
        if (($_POST['packName'] == "Website" && $_POST['price'] == 1000) OR ($_POST['packName'] == "Webstore" && $_POST['price'] == 2000) OR ($_POST['packName'] == "Website + Webstore" && $_POST['price'] == 2500) ) {

            //testing if price is correct FIXME : remove me si celui d'au dessus est plus safe
            // //testing if price is correct
            // if ($_POST['price'] == 1000 OR $_POST['price'] == 2000 OR $_POST['price'] == 2500 ) {

                //testing if project name at least 2 caracters
                if (preg_match("#^[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]{1,}[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]*[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]+$#i", $_POST['project'])) {
                    //testing if structure is correct
                    if ($_POST['structure'] == "individual" OR $_POST['structure'] == "professional" OR $_POST['structure'] == "association" OR $_POST['structure'] == "other" ) {

                        //testing if company name is correct
                        if (preg_match("#^[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]{1,}[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]*[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]+$#i", $_POST['company'])) {

                            //testing if firstName only has authorised caracters
                            if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['firstName'])) {

                                //testing if lastName only has authorised caracters
                                if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['lastName'])) {
                                    //testing if email is conform
                                    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['contactEmail'])) {

                                        //testing if phone is conform (not mandatory)
                                        if (preg_match("#[0-9\.+_ -]*$#", $_POST['phone'])) {

                                            //testing if address is conform
                                            if (preg_match("#^[a-z0-9\!,:;/\(\)'&+\#\$%\._ -]+$#i", $_POST['postalAddress'])) {

                                                //testing if postcode is conform
                                                if (preg_match("#^[a-z0-9\!,:;/\(\)'&+\#\$%\._ -]+$#i", $_POST['postCode'])) {

                                                    //testing if city is conform
                                                    if (preg_match("#^[a-z0-9\!,:;/\(\)'&+\#\$%\._ -]+$#i", $_POST['city'])) {

                                                        //testing if deadline is in the future
                                                        $today = date("Y-m-d");
                                                        if ( $_POST['deadline'] > $today) {

                                                            return true;

                                                        } else {
                                                        throw new \Exception('La deadline ne peut pas être dans le passé');
                                                        }
                                                    } else {
                                                    throw new \Exception('La ville n\'est pas conforme');
                                                    }
                                                } else {
                                                throw new \Exception('Le code postal n\'est pas conforme');
                                                }
                                            } else {
                                            throw new \Exception('L\'adresse n\'est pas conforme');
                                            }
                                        } else {
                                            throw new \Exception('Le numéro de téléphone n\'est pas conforme');
                                        }
                                    } else {
                                        throw new \Exception('L\'adresse email n\'est pas conforme');
                                    }
                                } else {
                                    throw new \Exception('Le nom n\'est pas conforme.');
                                }
                            } else {
                                throw new \Exception('Le prénom n\'est pas conforme.');
                            }
                        } else {
                            throw new \Exception('le nom de l\'entreprise n\'est pas conforme.');
                        }
                    } else {
                        throw new \Exception('La structure n\'est pas conforme.');
                    }
                } else {
                    throw new \Exception('Le nom du projet n\'est pas conforme.');
                }
            // } else {
            //     throw new \Exception('Le prix du pack n\'est pas conforme.');
            // }
        } else {
            throw new \Exception('Il y a un soucis.'); //I stay vague not to inform a malicious user who tryed to edit the price how to make it work
        }
    }

    //BACKEND
    //display packquotes
    public function listPackQuotes()
    {
        //messages to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();

        $packQuote = $quoteManager->getPackQuotes();

        require('templates/admin/packQuotesAdmin.php');
    }

    public function deletePackQuote($packQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->erasePackQuote($packQuoteId);
        header('Location: index.php?action=packQuotesAdmin');
        exit;
    }

    public function acceptDenyPackQuote($accepted, $packQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->acceptPackQuote($accepted, $packQuoteId);
        header('Location: index.php?action=packQuotesAdmin');
        exit;
    }

    public function updatePackQuoteStatus($quoteStatus, $packQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->packQuoteStatus($quoteStatus, $packQuoteId);
        header('Location: index.php?action=packQuotesAdmin');
        exit;
    }


    //CUSTOM QUOTES
    public function saveCustomQuote($siteType, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $design, $writingContent, $visualContent, $maintenance, $host, $domainYN, $deadlineSelect, $pageNb, $loginShowcaseYN, $paymentShowcaseYN, $productNb, $languages, $extensions, $paymentMtdShowcase, $options, $paymentMtdStore)
    {
        //Need to implode arrays to ssave them in DB FIXME : duplicate avec sendCustomQuote, mettre ça dans une methode appelé avant dans l'index ? 
        $languages = implode(", ",array_values($languages));
        $extensions = implode(", ",array_values($extensions));
        $paymentMtdShowcase = implode(", ",array_values($paymentMtdShowcase));
        $options = implode(", ",array_values($options));
        $paymentMtdStore = implode(", ",array_values($paymentMtdStore));

        $quoteManager = new QuoteManager();
        $quoteManager->insertNewCustomQuote(htmlspecialchars($siteType), htmlspecialchars($price), htmlspecialchars($project), htmlspecialchars($structure), htmlspecialchars($company), htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($phone), htmlspecialchars($postalAddress), htmlspecialchars($postCode), htmlspecialchars($city), htmlspecialchars($country), htmlspecialchars($deadline), htmlspecialchars($messageContent), htmlspecialchars($design), htmlspecialchars($writingContent), htmlspecialchars($visualContent), htmlspecialchars($maintenance), htmlspecialchars($host), htmlspecialchars($domainYN), htmlspecialchars($deadlineSelect), htmlspecialchars($pageNb), htmlspecialchars($loginShowcaseYN), htmlspecialchars($paymentShowcaseYN), htmlspecialchars($productNb), htmlspecialchars($languages), htmlspecialchars($extensions), htmlspecialchars($paymentMtdShowcase), htmlspecialchars($options), htmlspecialchars($paymentMtdStore));

        // header('Location: index.php?action=quote');

    }

    public function sendCustomQuote($siteType, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $design, $writingContent, $visualContent, $maintenance, $host, $domainYN, $deadlineSelect, $pageNb, $loginShowcaseYN, $paymentShowcaseYN, $productNb, $languages, $extensions, $paymentMtdShowcase, $options, $paymentMtdStore)
    {

        //Need to implode arrays to ssave them in DB FIXME : duplicate avec sendCustomQuote, mettre ça dans une methode appelé avant dans l'index ? 
        $languages = implode(", ",array_values($languages));
        $extensions = implode(", ",array_values($extensions));
        $paymentMtdShowcase = implode(", ",array_values($paymentMtdShowcase));
        $options = implode(", ",array_values($options));
        $paymentMtdStore = implode(", ",array_values($paymentMtdStore));


        date_default_timezone_set("Europe/Paris");
        $to  = 'xmailpoubelle@gmail.com, '. htmlspecialchars($contactEmail) . '';
        $topic = 'Quote resquest for a ' . htmlspecialchars($siteType);
        $message = '
        <html>
            <body>
                <h2>Quote resquest for a <strong>' . htmlspecialchars($siteType) . '</strong></h2>
                <h3>About you</h3>
                <p>Project name : <strong>' . htmlspecialchars($project) . '</strong></p>
                <p>Structure : <strong>' . htmlspecialchars($structure) . '</strong></p>
                <p>Compagny : <strong>' . htmlspecialchars($company) . '</strong></p>
                <p>Full name : <strong>' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . '</strong></p>
                <p>Email address : <strong>' . htmlspecialchars($contactEmail) . '</strong></p>
                <p>Phone number : <strong>' . htmlspecialchars($phone) . '</strong></p>
                <p>Address : <strong>' . htmlspecialchars($postalAddress) . '</strong></p>
                <p>Post Code : <strong>' . htmlspecialchars($postCode) . '</strong></p>
                <p>City : <strong>' . htmlspecialchars($city) . '</strong></p>
                <p>Country : <strong>' . htmlspecialchars($country) . '</strong></p>
                <p>Deadline : <strong>' . htmlspecialchars($deadlineSelect) . '</strong></p>
                <p>Specific date : <strong>' . htmlspecialchars($deadline) . '</strong></p>

                <h3>Showcase Website</h3>
                <p>Number of pages : <strong>' . htmlspecialchars($pageNb) . '</strong></p>
                <p>My users need to log in : <strong>' . htmlspecialchars($loginShowcaseYN) . '</strong></p>
                <p>Payment options needed : <strong>' . htmlspecialchars($paymentShowcaseYN) . '</strong></p>
                <p>Payment options : <strong>' . htmlspecialchars($paymentMtdShowcase) . '</strong></p>

                <h3>Webstore</h3>
                <p>Number of products for sale : <strong>' . htmlspecialchars($productNb) . '</strong></p>
                <p>Payment options : <strong>' . htmlspecialchars($paymentMtdStore) . '</strong></p>

                <h3>General information</h3>
                <p>Languages : <strong>' . htmlspecialchars($languages) . '</strong></p>
                <p>Design : <strong>' . htmlspecialchars($design) . '</strong></p>
                <p>Writing content needed : <strong>' . htmlspecialchars($writingContent) . '</strong></p>
                <p>Visual content needed : <strong>' . htmlspecialchars($visualContent) . '</strong></p>
                <p>Maintenance / Updates : <strong>' . htmlspecialchars($maintenance) . '</strong></p>
                <p>Host service needed : <strong>' . htmlspecialchars($host) . '</strong></p>
                <p>Domain name needed : <strong>' . htmlspecialchars($domainYN) . '</strong></p>
                <p>Extensions : <strong>' . htmlspecialchars($extensions) . '</strong></p>
                <p>Options : <strong>' . htmlspecialchars($options) . '</strong></p>

                <p>Project description : ' . htmlspecialchars($messageContent) . ' </p>
                <p>Total Price :<strong>' . htmlspecialchars($price) . ' €</strong></p>
                <p>Quote request made by email on ' . date("d-m-Y") . ' at ' . date("G:i") . ' </p>
            </body>
        </html>
        ';
        // Headers Content-type must be defined to send an HTML email
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'From: ' . htmlspecialchars($firstName) . ' '. htmlspecialchars($lastName) . '<'. htmlspecialchars($contactEmail) . '>';
        mail($to, $topic, $message, implode("\r\n", $headers));

        header('Location: index.php');
    }


    public function checkCustomQuoteFields($siteType, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $design, $writingContent, $visualContent, $maintenance, $host, $domainYN, $deadlineSelect, $pageNb, $loginShowcaseYN, $paymentShowcaseYN, $productNb, $languages, $extensions, $paymentMtdShowcase, $options, $paymentMtdStore)
    {
        $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";
        //testing if siteType is correct
        if ($_POST['siteType'] == "Showcase Website" OR $_POST['siteType'] == "Webstore" OR $_POST['siteType'] == "Showcase Website + Webstore" OR $_POST['siteType'] == "Redesign - Showcase Website" OR $_POST['siteType'] == "Redesign - Webstore" OR $_POST['siteType'] == "Redesign - Showcase Website + Webstore" ) {

            //testing if price is correct (value = minimum price with all minimum options selected = Redesign showcase w/ min options)
            if ($_POST['price'] > 400 ) {

                //testing if project name at least 2 caracters
                if (preg_match("#^[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]{1,}[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]*[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]+$#i", $_POST['project'])) {
                    //testing if structure is correct
                    if ($_POST['structure'] == "individual" OR $_POST['structure'] == "professional" OR $_POST['structure'] == "association" OR $_POST['structure'] == "other" ) {

                        //testing if company name is correct
                        if (preg_match("#^[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]{1,}[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]*[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#\$%\._-]+$#i", $_POST['company'])) {

                            //testing if firstName only has authorised caracters
                            if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['firstName'])) {

                                //testing if lastName only has authorised caracters
                                if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['lastName'])) {
                                    //testing if email is conform
                                    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['contactEmail'])) {

                                        //testing if phone is conform (not mandatory)
                                        if (preg_match("#[0-9\.+_ -]*$#", $_POST['phone'])) {

                                            //testing if address is conform
                                            if (preg_match("#^[a-z0-9\!,:;/\(\)'&+\#\$%\._ -]+$#i", $_POST['postalAddress'])) {

                                                //testing if postcode is conform
                                                if (preg_match("#^[a-z0-9\!,:;/\(\)'&+\#\$%\._ -]+$#i", $_POST['postCode'])) {

                                                    //testing if city is conform
                                                    if (preg_match("#^[a-z0-9\!,:;/\(\)'&+\#\$%\._ -]+$#i", $_POST['city'])) {

                                                        //testing if desing is correct
                                                        if ($_POST['design'] == "Standard" OR $_POST['design'] == "Custom" OR $_POST['design'] == "Custom +") {

                                                            //testing if writingContent is correct
                                                            if ($_POST['writingContent'] == "Yes" OR $_POST['writingContent'] == "No") {

                                                                //testing if visualContent is correct
                                                                if ($_POST['visualContent'] == "Yes" OR $_POST['visualContent'] == "No") {

                                                                    //testing if maintenance is correct
                                                                    if ($_POST['maintenance'] == "No" OR $_POST['maintenance'] == "Minimal" OR $_POST['maintenance'] == "Regular" OR $_POST['maintenance'] == "Premium" OR $_POST['maintenance'] == "Gold") {

                                                                        //testing if host is correct
                                                                        if ($_POST['host'] == "No" OR $_POST['host'] == "Standard" OR $_POST['host'] == "Premium") {

                                                                            //testing if domainYN is correct
                                                                            if ($_POST['domainYN'] == "No" OR $_POST['domainYN'] == "Yes" ) {

                                                                                //testing if deadlineSelect is correct
                                                                                if ($_POST['deadlineSelect'] == "No" OR $_POST['deadlineSelect'] == "Express +" OR $_POST['deadlineSelect'] == "Express" OR $_POST['deadlineSelect'] == "Fast" OR $_POST['deadlineSelect'] == "Regular" OR $_POST['deadlineSelect'] == "Slow") {

                                                                                //FIXME : comment imbriquer tous les if isset ?
                                                                                    //testing if deadline date is in the future
                                                                                    if (isset($_POST['deadline'])) {
                                                                                        $today = date("Y-m-d");
                                                                                        if ($_POST['deadline'] > $today) {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('La deadline ne peut pas être dans le passé');
                                                                                        }
                                                                                    }

                                                                                    //testing if loginShowcaseYN is correct
                                                                                    if (isset($_POST['loginShowcaseYN'])) {
                                                                                        if ($_POST['loginShowcaseYN'] ==  'Yes' or $_POST['loginShowcaseYN'] == 'No') {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('La choix de la connexion utilisateur n\'est pas conforme');
                                                                                        }
                                                                                    }

                                                                                    //testing if paymentShowcaseYN is correct
                                                                                    if (isset($_POST['paymentShowcaseYN'])) {
                                                                                        if ($_POST['paymentShowcaseYN'] ==  'Yes' OR $_POST['paymentShowcaseYN'] == 'No') {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('La choix de l\option de paiement pour le Site Vitrine n\'est pas conforme');
                                                                                        }
                                                                                    }

                                                                                    //testing if pageNb is correct
                                                                                    if (isset($_POST['pageNb'])) {
                                                                                        if ($_POST['pageNb'] ==  '- 10' OR $_POST['pageNb'] == '10 - 50' OR $_POST['pageNb'] == '50 - 100' OR $_POST['pageNb'] == '100 - 200' OR $_POST['pageNb'] == '200 - 500' OR $_POST['pageNb'] == '+ 500')
                                                                                        {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('Le nombre de page pour le Site Vitrine n\'est pas conforme');
                                                                                        }
                                                                                    }

                                                                                    //testing if productNb is correct
                                                                                    if (isset($_POST['productNb'])) {
                                                                                        if ($_POST['productNb'] ==  '- 10' OR $_POST['productNb'] == '10 - 100' OR $_POST['productNb'] == '100 - 200' OR $_POST['productNb'] == '200 - 500' OR $_POST['productNb'] == '+ 500')
                                                                                        {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('Le nombre de produits à vendre pour le Webstore n\'est pas conforme');
                                                                                        }
                                                                                    }

                                                                                    return true;

                                                                                } else {
                                                                                throw new \Exception('Le choix de la deadline n\'est pas conforme');
                                                                                }
                                                                            } else {
                                                                            throw new \Exception('Le choix du besoin en nom de domaine n\'est pas conforme');
                                                                            }
                                                                        } else {
                                                                        throw new \Exception('Le choix de l\'hébergement n\'est pas conforme');
                                                                        }
                                                                    } else {
                                                                    throw new \Exception('Le choix de maintenance n\'est pas conforme');
                                                                    }
                                                                } else {
                                                                throw new \Exception('Le choix contenu visuel n\'est pas conforme');
                                                                }
                                                            } else {
                                                            throw new \Exception('Le choix contenu éditorial n\'est pas conforme');
                                                            }
                                                        } else {
                                                        throw new \Exception('Le choix du design n\'est pas conforme');
                                                        }
                                                    } else {
                                                    throw new \Exception('La ville n\'est pas conforme');
                                                    }
                                                } else {
                                                throw new \Exception('Le code postal n\'est pas conforme');
                                                }
                                            } else {
                                            throw new \Exception('L\'adresse n\'est pas conforme');
                                            }
                                        } else {
                                            throw new \Exception('Le numéro de téléphone n\'est pas conforme');
                                        }
                                    } else {
                                        throw new \Exception('L\'adresse email n\'est pas conforme');
                                    }
                                } else {
                                    throw new \Exception('Le nom n\'est pas conforme.');
                                }
                            } else {
                                throw new \Exception('Le prénom n\'est pas conforme.');
                            }
                        } else {
                            throw new \Exception('le nom de l\'entreprise n\'est pas conforme.');
                        }
                    } else {
                        throw new \Exception('La structure n\'est pas conforme.');
                    }
                } else {
                    throw new \Exception('Le nom du projet n\'est pas conforme.');
                }
            } else {
                throw new \Exception('Le prix n\'est pas conforme.');
            }
        } else {
            throw new \Exception('Le type de prestation souhaité n\'est pas conforme.');
        }
    }
}
