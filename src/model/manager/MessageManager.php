<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;

// require_once('src/model/manager/Manager.php'); // FIXME : a remettre si l'autoload déconne

class MessageManager extends GlobalManager
{

    public function insertNewMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $newMessageDb = $this->_db->prepare('INSERT INTO messages( firstName, lastName, contactEmail, topic, messageContent, messageDate ) VALUES(?, ?, ?, ?, ?, NOW())');
        $newMessageDb->execute(array($firstName, $lastName, $contactEmail, $topic, $messageContent));
    }


    public function insertAnswer($messageId, $answerContent)
    {
        $answerDb = $this->_db->prepare('INSERT INTO answers( messageId, answerContent, answerDate ) VALUES(?, ?, NOW())');
        $answerDb->execute(array($messageId, $answerContent));
    }


    public function getNewMessages($firstItem, $itemsPerPage)
    {
        $req = $this->_db->prepare('SELECT * FROM messages WHERE flag < 2 ORDER BY messageDate DESC LIMIT ?,?');
        $req->bindValue(1, $firstItem, \PDO::PARAM_INT);
        $req->bindValue(2, $itemsPerPage, \PDO::PARAM_INT);
        $req->execute();

        while ($datasNewMessages = $req->fetch(\PDO::FETCH_ASSOC)) {
            $newMessage[] = new Message($datasNewMessages);
        }
        if (!empty($newMessage)) { //needed otherwise gives an error on the messagesAdmin.php when no new message
            return $newMessage;
        }
    }

    //Pagination
    public function getTotalPagesMessages()
    {
        $req = $this->_db->query('SELECT COUNT(*) AS total_items FROM messages');
        $returnTotalPagesMessages= $req->fetch();
        return $returnTotalPagesMessages;
    }


    public function getArchivedMessages()
    {
        $req = $this->_db->query('SELECT * FROM messages WHERE flag = 2 ORDER BY messageDate DESC');
        while ($datasArchivedMessages = $req->fetch(\PDO::FETCH_ASSOC)) {
            $archivedMessage[] = new Message($datasArchivedMessages);
        }
        if (!empty($archivedMessage)) { //needed otherwise gives an error on the messagesAdmin.php when no new message
            return $archivedMessage;
        }
    }

    public function eraseMessage($messageId)
    {
        $msgDelete = $this->_db->prepare('DELETE FROM messages WHERE id = ?');
        $msgDelete->execute(array($messageId));
    }


    public function fileArchiveMessage($messageId)
    {
        $msgArchive = $this->_db->prepare('UPDATE messages SET flag = 2 WHERE id = ?');
        $msgArchive->execute(array($messageId));
    }


    public function fileAnsweredMessage($messageId)
    {
        $msgAnswered = $this->_db->prepare('UPDATE messages SET flag = 1 WHERE id = ?');
        $msgAnswered->execute(array($messageId));
    }

    //turn messages icon (menuAdmin) in red if messages to manage ( if flag == 0 exists at least once)
    public function isThereNewMsg()
    {
        $req = $this->_db->query('SELECT flag FROM messages WHERE flag = 0');
        $isThereNewMsg= $req->fetch();
        return $isThereNewMsg;
    }
}
