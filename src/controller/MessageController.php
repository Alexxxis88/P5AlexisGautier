<?php

namespace AlexisGautier\PersonalWebsite\Controller;

require_once('src/model/manager/MessageManager.php');
use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;


class MessageController
{
    public function checkMessageFields($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $accentedCharacters = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";

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
                        throw new \Exception('L\'intitulé n\'est pas conforme');
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
    }

    public function sendMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
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


    public function saveMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $messageManager = new MessageManager();
        $messageManager->insertNewMessage(htmlspecialchars($firstName), htmlspecialchars($lastName), htmlspecialchars($contactEmail), htmlspecialchars($topic), htmlspecialchars($messageContent));
    }



}
