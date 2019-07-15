<?php

namespace AlexisGautier\PersonalWebsite\Controller;

// require_once('src/model/manager/MessageManager.php'); // FIXME : a remettre si l'autoload déconne
use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;


class MessageController
{
    //FRONTEND
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


    //BACKEND
    //display new, answered and archived messages
    public function listAllMessages()
    {
        //messages to manage red icon
        $messageManager = new MessageManager();
        // $nbOfReportedComments = $commentManager->getNbOfReportedComments();

        $newMessages = $messageManager->getNewMessages();
        // $archived = $messageManager->getArchivedMessages();

        require('templates/admin/messagesAdmin.php');
    }


    public function deleteMessage($messageId)
    {
        $messageManager = new MessageManager();
        $messageManager->eraseMessage($messageId);
        header('Location: index.php?action=messagesAdmin');
        exit;
    }

    public function archiveMessage($messageId)
    {
        $messageManager = new MessageManager();
        $messageManager->fileArchiveMessage($messageId);
        header('Location: index.php?action=messagesAdmin');
        exit;
    }


    public function updateAnswerMessageFlag($messageId)
    {
        $messageManager = new MessageManager();
        $messageManager->fileAnsweredMessage($messageId);
        header('Location: index.php?action=messagesAdmin');
        exit;
    }

    public function sendAnswer($clientEmail, $answerTopic, $answerContent)
    {
        $to  = 'xmailpoubelle@gmail.com, '. htmlspecialchars($clientEmail) . '';
        $message = '
        <html>
            <body>
                <p>' .  htmlspecialchars($answerContent) . '</p>
            </body>
        </html>
        ';
        // Headers Content-type must be defined to send an HTML email
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'From: Alexis Gautier <alexisxgautier@gmail.com>';
        mail($to, $answerTopic, $message, implode("\r\n", $headers));

        header('Location: index.php');
    }


    public function saveAnswer($messageId, $answerContent)
    {
        $messageManager = new MessageManager();
        $messageManager->insertAnswer($messageId, htmlspecialchars($answerContent));
    }


    public function deleteAllSelectedComments($arrayCommentsIDs)
    {
        $messageManager = new MessageManager();
        $deleteAllSelectedComments = $messageManager->eraseAllSelectedComments($arrayCommentsIDs);
        header('Location: index.php?action=manageComments');
        exit;
    }

    public function approveAllSelectedComments($arrayCommentsIDs)
    {
        $messageManager = new MessageManager();
        $approveAllSelectedComments = $messageManager->acceptAllSelectedComments($arrayCommentsIDs);
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '&success=6');
        exit;
    }

}
