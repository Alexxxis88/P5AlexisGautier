<?php
class QuoteController
{
    public function checkPackQuoteFields($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";
        //testing if packname is correct
        if ($_POST['packName'] == "Website" OR $_POST['packName'] == "Webstore" OR $_POST['packName'] == "Website + Webstore" ) {

            //testing if price is correct
            if ($_POST['price'] == 1000 OR $_POST['price'] == 2000 OR $_POST['price'] == 2500 ) {

                //testing if project name at least 2 caracters
                if (preg_match("#^[a-z0-9\!'&+\#\$%\._-]{1,}[' -]?[a-z0-9\!'&+\#\$%\._-]*[' -]?[a-z0-9\!'&+\#\$%\._-]+$#i", $_POST['project'])) {
                    //testing if structure is correct
                    if ($_POST['structure'] == "individual" OR $_POST['structure'] == "professional" OR $_POST['structure'] == "association" OR $_POST['structure'] == "other" ) {

                        //testing if company name is correct
                        if (preg_match("#^[a-z0-9\!'&+\#\$%\._-]{1,}[' -]?[a-z0-9\!'&+\#\$%\._-]*[' -]?[a-z0-9\!'&+\#\$%\._-]+$#i", $_POST['company'])) {

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
                                                        throw new Exception('La deadline ne peut pas être dans le passé');
                                                        }
                                                    } else {
                                                    throw new Exception('La ville n\'est pas conforme');
                                                    }
                                                } else {
                                                throw new Exception('Le code postal n\'est pas conforme');
                                                }
                                            } else {
                                            throw new Exception('L\'adresse n\'est pas conforme');
                                            }
                                        } else {
                                            throw new Exception('Le numéro de téléphone n\'est pas conforme');
                                        }
                                    } else {
                                        throw new Exception('L\'adresse email n\'est pas conforme');
                                    }
                                } else {
                                    throw new Exception('Le nom n\'est pas conforme.');
                                }
                            } else {
                                throw new Exception('Le prénom n\'est pas conforme.');
                            }
                        } else {
                            throw new Exception('le nom de l\'entreprise n\'est pas conforme.');
                        }
                    } else {
                        throw new Exception('La structure n\'est pas conforme.');
                    }
                } else {
                    throw new Exception('Le nom du projet n\'est pas conforme.');
                }
            } else {
                throw new Exception('Le prix du pack n\'est pas conforme.');
            }
        } else {
            throw new Exception('Le nom du pack n\'est pas conforme.');
        }
    }

    public function sendPackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $to  = 'xmailpoubelle@gmail.com, '. htmlspecialchars($contactEmail) . '';
        $message = '
        <html>
            <body>
                <p>' .  htmlspecialchars($messageContent) . '</p>
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


    public function savePackQuote($packName, $price, $project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $quoteManager = new QuoteManager();
        $quoteManager->insertNewPackQuote(htmlspecialchars($packName), htmlspecialchars($price), htmlspecialchars($project), $structure, htmlspecialchars($company), htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($phone), htmlspecialchars($postalAddress), htmlspecialchars($postCode), htmlspecialchars($city), $country, $deadline, htmlspecialchars($messageContent));

        header('Location: index.php?action=services#pricing');

    }



}