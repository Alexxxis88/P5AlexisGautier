<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;

class SessionManager extends GlobalManager
{
    public function checkLogIn($email)
    {
        $check = $this->_db->prepare('SELECT id, email, pass FROM members WHERE email = ?');
        $check->execute(array($email));
        $checkLogIn = $check->fetch();
        return $checkLogIn;
    }


    public function UpdatePass($newpass, $email)
    {
        $UpdatePass = $this->_db->prepare('UPDATE members SET pass = ? WHERE email = ?');
        $UpdatePass->execute(array($newpass,$email));
    }


    public function checkPass($email)
    {
        $check = $this->_db->prepare('SELECT pass FROM members WHERE email = ?');
        $check->execute(array($email));
        $checkPass = $check->fetch();
        return $checkPass;
    }
}
