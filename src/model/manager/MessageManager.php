<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;

// require_once('src/model/manager/Manager.php'); // FIXME : a remettre si l'autoload déconne

class MessageManager extends Manager
{

    public function insertNewMessage($firstName, $lastName, $contactEmail, $topic, $messageContent)
    {
        $newMessageDb = $this->_db->prepare('INSERT INTO messages( firstName, lastName, contactEmail, topic, messageContent, messageDate ) VALUES(?, ?, ?, ?, ?, NOW())');
        $newMessageDb->execute(array($firstName, $lastName, $contactEmail, $topic, $messageContent));
    }



    //gets the Reported comments (where flag >0 and sort them by number of time reported OR by date showing older first if reported the same nb of times)
    public function getNewMessages()
    {
        $req = $this->_db->query('SELECT * FROM messages WHERE flag = 0 ORDER BY messageDate');
        while ($datasNewMessages = $req->fetch(\PDO::FETCH_ASSOC)) {
            $newMessage[] = new Message($datasNewMessages);
        }
        if (!empty($newMessage)) { //needed otherwise gives an error on the messagesAdmin.php when no new message
            return $newMessage;
        }
    }

    //get new comments (flag value = 9999 by default)
    public function getNewComments()
    {
        $req = $this->_db->query('SELECT id, postId, author, comment, DATE_FORMAT(commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS modCommentDate, flag FROM comments WHERE flag = 9999 ORDER BY commentDate ');
        while ($datasNewComments = $req->fetch(\PDO::FETCH_ASSOC)) {
            $newComments[] = new Comment($datasNewComments);
        }

        if (!empty($newComments)) { //needed otherwise gives an error on the commentsView.php when no new comments to manage
            return $newComments;
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



    //must receive an array of ids to delete all the comments at once
    public function eraseAllSelectedComments($arrayCommentsIDs)
    {
        $arrayLength = count($arrayCommentsIDs, COUNT_NORMAL);
        for ($i = 0; $i < $arrayLength; $i++) {
            $id = $arrayCommentsIDs[$i];
            $eraseAllSelectedComments = $this->_db->prepare('DELETE FROM comments WHERE id IN (?)');
            $eraseAllSelectedComments->execute(array($id));
        }
    }

    //accept all the selected reported comments
    public function acceptAllSelectedComments($arrayCommentsIDs)
    {
        $arrayLength = count($arrayCommentsIDs, COUNT_NORMAL);
        for ($i = 0; $i < $arrayLength; $i++) {
            $id = $arrayCommentsIDs[$i];
            $acceptAllSelectedComments = $this->_db->prepare('UPDATE comments SET flag = 0 WHERE id IN (?)');
            $acceptAllSelectedComments->execute(array($id));
        }
    }

    //turn messages icon (menuAdmin) in red if messages to manage ( if flag == 0 exists at least once)
    // public function getNbOfReportedComments()
    // {
    //     $req = $this->_db->query('SELECT SUM(flag) AS flagTotal FROM comments');
    //     $reportedCommentNb= $req->fetch();
    //     return $reportedCommentNb;
    // }
}
