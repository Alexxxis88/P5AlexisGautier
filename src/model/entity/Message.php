<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;


class Message
{
    private $_id ;
    private $_firstName ;
    private $_lastName ;
    private $_contactEmail ;
    private $_topic ;
    private $_messageContent ;
    private $_messageDate ;
    private $_flag ;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    //GETTERS
    public function id()
    {
        return $this->_id;
    }
    public function firstName()
    {
        return $this->_firstName;
    }
    public function lastName()
    {
        return $this->_lastName;
    }
    public function contactEmail()
    {
        return $this->_contactEmail;
    }
    public function topic()
    {
        return $this->_topic;
    }
    public function messageContent()
    {
        return $this->_messageContent;
    }
    public function messageDate()
    {
        return $this->_messageDate;
    }
    public function flag()
    {
        return $this->_flag;
    }


    //SETTERS
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setFirstName($firstName)
    {
        if (is_string($firstName)) {
            $this->_firstName = $firstName;
        }
    }

    public function setLastName($lastName)
    {
        if (is_string($lastName)) {
            $this->_lastName = $lastName;
        }
    }

    public function setContactEmail($contactEmail)
    {
        if (is_string($contactEmail)) {
            $this->_contactEmail = $contactEmail;
        }
    }

    public function setTopic($topic)
    {
        if (is_string($topic)) {
            $this->_topic = $topic;
        }
    }

    public function setMessageContent($messageContent)
    {
        if (is_string($messageContent)) {
            $this->_messageContent = $messageContent;
        }
    }

    public function setMessageDate($messageDate)
    {
        $this->_messageDate = $messageDate;
    }

    public function setFlag($flag)
    {
        $flag = (int) $flag;
        if ($flag >= 0) {
            $this->_flag = $flag;
        }
    }
}
