<?php
class QuoteController
{
    public function checkPackQuoteFields($project, $structure, $company, $firstName, $lastName, $contactEmail, $phone, $postalAddress, $postCode, $city, $country, $deadline, $messageContent)
    {
        $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";
        //testing if project name at least 2 caracters
        if (preg_match("#^[a-z0-9._-]{1,}[' -]?[a-z0-9._-]*[' -]?[a-z0-9._-]+$#i", $_POST['project'])) {

                                        //testing if firstName only has authorised caracters
                                        if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['firstName'])) {
                                            //testing if lastName only has authorised caracters
                                            if (preg_match("#^[a-z". $accentedCharacters ."]+[' -]?[a-z". $accentedCharacters ."]+$#i", $_POST['lastName'])) {
                                                //testing if email is conform
                                                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#i", $_POST['contactEmail'])) {
                                                    //testing if topic is conform
                                                    if (preg_match("#^[a-z". $accentedCharacters ."(' \-)*]+[a-z". $accentedCharacters ."]+$#i", $_POST['topic'])) {
                                                        return true;
                                                    } else {
                                                        throw new Exception('L\'intitulé n\'est pas conforme');
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
            throw new Exception('Le nom du projet n\'est pas conforme.');
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

        header('Location: index.php');

    }



}
