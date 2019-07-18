<?php

namespace AlexisGautier\PersonalWebsite\Controller;

// require_once('src/model/manager/MessageManager.php'); // FIXME : a remettre si l'autoload déconne
use \AlexisGautier\PersonalWebsite\Model\Manager\MessageManager;
use \AlexisGautier\PersonalWebsite\Model\Manager\QuoteManager;


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
                        throw new \Exception('Message topic is incorrect');
                    }
                } else {
                    throw new \Exception('Email address is incorrect');
                }
            } else {
                throw new \Exception('Last Name is incorrect');
            }
        } else {
            throw new \Exception('First Name is incorrect');
        }
    }


    public function sendMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $to  = 'contact@straightandalert.com, '. htmlspecialchars($contactEmail) . '';
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
        if(mail($to, $topic, $message, implode("\r\n", $headers))) //FIXME : enelever le test quand ça remarchera
        {
            header('Location: index.php?action=contact&success=3');

        } else {
        throw new \Exception('There was a problem when sending your message. Please try again');
        }

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
        //messages to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $messageManager = new MessageManager();
        $isThereNewMessages = $messageManager->isThereNewMsg();

        //quotes to manage red icon //FIXME : comment factoriser pour ne pas le copier coller mille fois
        $quoteManager = new QuoteManager();
        $isThereNewPackQuotes = $quoteManager->isThereNewPackQuote();
        $isThereNewCustomQuotes = $quoteManager->isThereNewCustomQuote();


        //Pagination
        $totalPages = $messageManager->getTotalPagesMessages();
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
        $newMessages = $messageManager->getNewMessages($firstItem, $itemsPerPage);
        $archivedMessages = $messageManager->getArchivedMessages();

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
        $to  = ''. htmlspecialchars($clientEmail) . '';
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

        // header('Location: index.php'); FIXME needs to be removed to be able to run through updateAnswerMessageFlag after  sendAnswer in routeur "answerMessage" ?????
    }


    public function saveAnswer($messageId, $answerContent)
    {
        $messageManager = new MessageManager();
        $messageManager->insertAnswer($messageId, htmlspecialchars($answerContent));
    }


}
