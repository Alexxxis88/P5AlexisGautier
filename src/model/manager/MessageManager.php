<?php
class MessageManager extends Manager
{

    public function insertNewMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $newMessageDb = $this->_db->prepare('INSERT INTO messages( firstName, lastName, contactEmail, topic, messageContent, messageDate ) VALUES(?, ?, ?, ?, ?, NOW())');
        $newMessageDb->execute(array($firstName, $lastName, $contactEmail, $topic, $messageContent));
    }
}
