<?php

namespace AlexisGautier\PersonalWebsite\Controller;

// require_once('src/model/manager/QuoteManager.php'); FIXME : a remettre si l'autoload déconne
use \AlexisGautier\PersonalWebsite\Model\Manager\QuoteManager;
use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;


class QuoteController
{
    //PACK QUOTES
    public function savePackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $imageName)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->insertNewPackQuote(htmlspecialchars($packName), htmlspecialchars($price), htmlspecialchars($project), htmlspecialchars($structure), htmlspecialchars($company), htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($phone), htmlspecialchars($postalAddress), htmlspecialchars($postCode), htmlspecialchars($city), htmlspecialchars($country), htmlspecialchars($deadline), htmlspecialchars($messageContent), htmlspecialchars($imageName));
    }

    public function sendPackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        date_default_timezone_set("Europe/Paris");
        $to  = 'jeangujeangu@gmail.com, '. htmlspecialchars($contactEmail) . '';
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
        if(mail($to, $topic, $message, implode("\r\n", $headers)))
        {
            header('Location: index.php?action=services&success=1');
        }else{
            throw new \Exception('There was a problem when sending your quote request. Please try again');
        }
    }

    // public function imageQuote()
    // {
    //     //checking if an attached file has been sent FIXME : mettre dans une méthode dans le controller
    //     if (isset($_FILES['attachedFile']) and $_FILES['attachedFile']['error'] == 0) {

    //     //checking its size
    //         if ($_FILES['attachedFile']['size'] <= 7000000) {
    //             //checking its format
    //             $fileIinfo = pathinfo($_FILES['attachedFile']['name']);
    //             $extension_upload = $fileIinfo['extension'];
    //             $extensions_allowed = array('jpg', 'jpeg', 'png');
    //             if (in_array($extension_upload, $extensions_allowed)) {
    //                 // File is stored in uploads folder on server
    //                 $filenameProject = strtolower(str_replace('/\s+/', '', preg_replace('/[^a-zA-Z]/', '', $_POST['project'])));
    //                 $filenameFirstName = strtolower(str_replace('/\s+/', '', preg_replace('/[^a-zA-Z]/', '', $_POST['firstName'])));
    //                 $filenameLastName = strtolower(str_replace('/\s+/', '', preg_replace('/[^a-zA-Z]/', '', $_POST['lastName'])));
    //                 $fullImageName = $filenameProject . '_' . $filenameFirstName . '_' . $filenameLastName . '.' . $extension_upload;

    //                 move_uploaded_file($_FILES['attachedFile']['tmp_name'], 'uploads/' . $fullImageName );

    //             } else {
    //                 throw new \Exception('Incorrect format. Please use jpg, jpeg or png');
    //             }
    //         } else {
    //             throw new \Exception('The file you uploaded is too big. Please keep it under 7Mo');
    //         }
    //     }
    // }

    public function checkPackQuoteFields($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";
        //testing if packname is correct and matching the price
        if (($_POST['packName'] == "Website" && $_POST['price'] == 1000) OR ($_POST['packName'] == "Webstore" && $_POST['price'] == 2000) OR ($_POST['packName'] == "Website + Webstore" && $_POST['price'] == 2500) ) {

            //testing if project name at least 2 caracters
            if (preg_match("#^[a-z0-9". $accentedCharacters ."\!'&+\#%\._-]{1,}[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#%\._-]*[' -]?[a-z0-9". $accentedCharacters ."\!'&+\#%\._-]+$#i", $_POST['project'])) {
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
                                                    throw new \Exception('Deadline cannot be in the past');
                                                    }
                                                } else {
                                                throw new \Exception('City is incorrect');
                                                }
                                            } else {
                                            throw new \Exception('Post Code is incorrect');
                                            }
                                        } else {
                                        throw new \Exception('Address is incorrect');
                                        }
                                    } else {
                                        throw new \Exception('Phone number is incorrect');
                                    }
                                } else {
                                    throw new \Exception('Email address is incorrect');
                                }
                            } else {
                                throw new \Exception('Last Name is incorrect.');
                            }
                        } else {
                            throw new \Exception('First Name is incorrect.');
                        }
                    } else {
                        throw new \Exception('Company name is incorrect');
                    }
                } else {
                    throw new \Exception('Structure is incorrect');
                }
            } else {
                throw new \Exception('Project name is incorrect');
            }
        } else {
            throw new \Exception('There is a problem'); //I stay vague not to inform a malicious user who tryed to edit the price how to make it work
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
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();


        //Pagination
        $totalPages = $quoteManager->getTotalPagesPackQuotes();
        $total = $totalPages['total_items']; // total of messages in DB

        if (isset($_GET['sortBy'])) {
            $itemsPerPage = intval($_GET['sortBy']);
        } else {
            $itemsPerPage = 5;
        }

        $nbOfPages = ceil($total/$itemsPerPage);

        if (isset($_GET['page'])) {
            $currentPage = intval($_GET['page']);

            if ($currentPage>$nbOfPages) { // if a user puts the value of a page that doesnt exist, it redirects to the last page ($nbOfPages)
                $currentPage=$nbOfPages;
            }
        } else {
            $currentPage = 1;
        }
        $firstItem = ($currentPage-1)*$itemsPerPage; // first message to display
        $packQuote = $quoteManager->getPackQuotes($firstItem, $itemsPerPage);

        require('templates/admin/packQuotesAdmin.php');
    }

    public function deletePackQuote($packQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->erasePackQuote($packQuoteId);
        header('Location: index.php?action=packQuotesAdmin&page=1&sortBy=5');
        exit;
    }

    public function acceptDenyPackQuote($accepted, $packQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->acceptPackQuote($accepted, $packQuoteId);
        header('Location: index.php?action=packQuotesAdmin&page=1&sortBy=5');
        exit;
    }

    public function updatePackQuoteStatus($quoteStatus, $packQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->packQuoteStatus($quoteStatus, $packQuoteId);
        header('Location: index.php?action=packQuotesAdmin&page=1&sortBy=5');
        exit;
    }


    //CUSTOM QUOTES


    public function servicesCustomQuote($arrayServices)
    {   

        $displayController = new DisplayController();
        $displayController->displayCheckprice();

        
        echo '<h3>arrayServices avant de le convertir en tableau</h3> '; 
        echo var_dump($arrayServices);
       
        $arrayServices = explode(",",$arrayServices);

        echo '<h3>arrayServices APRES l\'avoir converti en tableau</h3> '; 
        echo var_dump($arrayServices);


        for($i = 0; $i < sizeof($arrayServices); $i++ )
        {   
            $quoteManager = new QuoteManager();
            $returnValue = $quoteManager->checkServicesCustomQuote($arrayServices[$i]);

            echo '<h3>La valeur du champ ' . $arrayServices[$i] . ' récupérée depuis la BDD via checkServicesCustomQuote()</h3>  '; 
            echo var_dump($returnValue);
        }


       
    }



    public function saveCustomQuote($siteType, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent, $imageName, $design, $writingContent, $visualContent, $maintenance, $host, $domainYN, $deadlineSelect, $pageNb, $loginShowcaseYN, $paymentShowcaseYN, $productNb, $languages, $extensions, $paymentMtdShowcase, $options, $paymentMtdStore)
    {
        //Need to implode arrays to ssave them in DB FIXME : duplicate avec sendCustomQuote, mettre ça dans une methode appelé avant dans l'index ?
        $languages = implode(", ",array_values($languages));
        $extensions = implode(", ",array_values($extensions));
        $paymentMtdShowcase = implode(", ",array_values($paymentMtdShowcase));
        $options = implode(", ",array_values($options));
        $paymentMtdStore = implode(", ",array_values($paymentMtdStore));

        $quoteManager = new QuoteManager();
        $quoteManager->insertNewCustomQuote(htmlspecialchars($siteType), htmlspecialchars($price), htmlspecialchars($project), htmlspecialchars($structure), htmlspecialchars($company), htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($phone), htmlspecialchars($postalAddress), htmlspecialchars($postCode), htmlspecialchars($city), htmlspecialchars($country), htmlspecialchars($deadline), htmlspecialchars($messageContent), htmlspecialchars($imageName), htmlspecialchars($design), htmlspecialchars($writingContent), htmlspecialchars($visualContent), htmlspecialchars($maintenance), htmlspecialchars($host), htmlspecialchars($domainYN), htmlspecialchars($deadlineSelect), htmlspecialchars($pageNb), htmlspecialchars($loginShowcaseYN), htmlspecialchars($paymentShowcaseYN), htmlspecialchars($productNb), htmlspecialchars($languages), htmlspecialchars($extensions), htmlspecialchars($paymentMtdShowcase), htmlspecialchars($options), htmlspecialchars($paymentMtdStore));


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
        $to  = 'jeangujeangu@gmail.com, '. htmlspecialchars($contactEmail) . '';
        $topic = 'Quote resquest for a custom ' . htmlspecialchars($siteType);
        $message = '
        <html>
            <body>
                <h2>Quote resquest for a custom <strong>' . htmlspecialchars($siteType) . '</strong></h2>
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
        if(mail($to, $topic, $message, implode("\r\n", $headers)))
        {

            header('Location: index.php?action=quote&success=1');
        }else{
            throw new \Exception('There was a problem when sending your quote request. Please try again');
        }
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
                                                                                            throw new \Exception('Deadline cannot be in the past');
                                                                                        }
                                                                                    }

                                                                                    //testing if loginShowcaseYN is correct
                                                                                    if (isset($_POST['loginShowcaseYN'])) {
                                                                                        if ($_POST['loginShowcaseYN'] ==  'Yes' or $_POST['loginShowcaseYN'] == 'No') {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('User login options is incorrect');
                                                                                        }
                                                                                    }

                                                                                    //testing if paymentShowcaseYN is correct
                                                                                    if (isset($_POST['paymentShowcaseYN'])) {
                                                                                        if ($_POST['paymentShowcaseYN'] ==  'Yes' OR $_POST['paymentShowcaseYN'] == 'No') {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('Payment option for Showcase Website is incorrect');
                                                                                        }
                                                                                    }

                                                                                    //testing if pageNb is correct
                                                                                    if (isset($_POST['pageNb'])) {
                                                                                        if ($_POST['pageNb'] ==  '- 10' OR $_POST['pageNb'] == '10 - 50' OR $_POST['pageNb'] == '50 - 100' OR $_POST['pageNb'] == '100 - 200' OR $_POST['pageNb'] == '200 - 500' OR $_POST['pageNb'] == '+ 500')
                                                                                        {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('Number of page for Showcase Website is incorrect');
                                                                                        }
                                                                                    }

                                                                                    //testing if productNb is correct
                                                                                    if (isset($_POST['productNb'])) {
                                                                                        if ($_POST['productNb'] ==  '- 10' OR $_POST['productNb'] == '10 - 100' OR $_POST['productNb'] == '100 - 200' OR $_POST['productNb'] == '200 - 500' OR $_POST['productNb'] == '+ 500')
                                                                                        {
                                                                                            return true;
                                                                                        } else {
                                                                                            throw new \Exception('Number of products for sale for Webstore is incorrect');
                                                                                        }
                                                                                    }

                                                                                    return true;

                                                                                } else {
                                                                                throw new \Exception('Deadline is incorrect');
                                                                                }
                                                                            } else {
                                                                            throw new \Exception('Domain name choice is incorrect');
                                                                            }
                                                                        } else {
                                                                        throw new \Exception('Host choice is incorrect');
                                                                        }
                                                                    } else {
                                                                    throw new \Exception('Maintenance choice is incorrect');
                                                                    }
                                                                } else {
                                                                throw new \Exception('Visual content choice is incorrect');
                                                                }
                                                            } else {
                                                            throw new \Exception('Writing content choice is incorrect');
                                                            }
                                                        } else {
                                                        throw new \Exception('Design choice is incorrect');
                                                        }
                                                    } else {
                                                    throw new \Exception('City is incorrect');
                                                    }
                                                } else {
                                                throw new \Exception('Post Code is incorrect');
                                                }
                                            } else {
                                            throw new \Exception('Address is incorrect');
                                            }
                                        } else {
                                            throw new \Exception('Phone number is incorrect');
                                        }
                                    } else {
                                        throw new \Exception('Email address is incorrect');
                                    }
                                } else {
                                    throw new \Exception('Last Name is incorrect.');
                                }
                            } else {
                                throw new \Exception('First Name is incorrect.');
                            }
                        } else {
                            throw new \Exception('Company name is incorrect');
                        }
                    } else {
                        throw new \Exception('Structure is incorrect');
                    }
                } else {
                    throw new \Exception('Project name is incorrect');
                }
            } else {
                throw new \Exception('Price is incorrect');
            }
        } else {
            throw new \Exception('Site type is incorrect');
        }
    }

    //BACKEND
    //display customquotes
    public function listCustomQuotes()
    {
        //messages to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();

        //Pagination
        $totalPages = $quoteManager->getTotalPagesCustomQuotes();
        $total = $totalPages['total_items']; // total of messages in DB

        if (isset($_GET['sortBy'])) {
            $itemsPerPage = intval($_GET['sortBy']);
        } else {
            $itemsPerPage = 5;
        }

        $nbOfPages = ceil($total/$itemsPerPage);

        if (isset($_GET['page'])) {
            $currentPage = intval($_GET['page']);

            if ($currentPage>$nbOfPages) { // if a user puts the value of a page that doesnt exist, it redirects to the last page ($nbOfPages)
                $currentPage=$nbOfPages;
            }
        } else {
            $currentPage = 1;
        }
        $firstItem = ($currentPage-1)*$itemsPerPage; // first message to display
        $customQuote = $quoteManager->getCustomQuotes($firstItem, $itemsPerPage);

        require('templates/admin/customQuotesAdmin.php');
    }

    public function deleteCustomQuote($customQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->eraseCustomQuote($customQuoteId);
        header('Location: index.php?action=customQuotesAdmin&page=1&sortBy=5');
        exit;
    }

    public function acceptDenyCustomQuote($accepted, $customQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->acceptCustomQuote($accepted, $customQuoteId);
        header('Location: index.php?action=customQuotesAdmin&page=1&sortBy=5');
        exit;
    }

    public function updateCustomQuoteStatus($quoteStatus, $customQuoteId)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->customQuoteStatus($quoteStatus, $customQuoteId);
        header('Location: index.php?action=customQuotesAdmin&page=1&sortBy=5');
        exit;
    }
}
