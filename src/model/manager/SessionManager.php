<?php

namespace AlexisGautier\PersonalWebsite\Model\Manager;

class SessionManager extends Manager
{
    public function checkLogIn($email)
    {
        $check = $this->_db->prepare('SELECT email, pass FROM members WHERE email = ?');
        $check->execute(array($email));
        $checkLogIn = $check->fetch();
        return $checkLogIn;
    }

    public function UpdatePass($newpass, $id)
    {
        $UpdatePass = $this->_db->prepare('UPDATE members SET pass = ? WHERE id = ?');
        $UpdatePass->execute(array($newpass,$id));
    }

    public function checkPass($email)
    {
        $check = $this->_db->prepare('SELECT pass FROM members WHERE id = ?');
        $check->execute(array($userID));
        $checkPass = $check->fetch();
        return $checkPass;
    }

}
