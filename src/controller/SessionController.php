<?php

namespace AlexisGautier\PersonalWebsite\Controller;

// require_once('src/model/manager/SessionManager.php'); FIXME : a remettre si l'autoload déconne
use \AlexisGautier\PersonalWebsite\Model\Manager\SessionManager;

class SessionController
{
    public function checkSession()
    {
        //check wether I'm registered with COOKIE or SESSION
        if (isset($_COOKIE['id'])) {
            $cookieOrSessionID = $_COOKIE['id'];
            return $cookieOrSessionID;
        } elseif (isset($_SESSION['id'])) {
            $cookieOrSessionID = $_SESSION['id'];
            return $cookieOrSessionID;
        }
    }

    public function checkLog($email)
    {
        $sessionManager = new SessionManager();
        $checkLogIn = $sessionManager->checkLogIn($email);

        // Check is password matches the one registered in DB
        $isPasswordCorrect = password_verify(htmlspecialchars($_POST['pass']), $checkLogIn['pass']);
        if (!$checkLogIn) {
            throw new \Exception('Vérifiez vos identifiants de connexion');
        } else {   //if the password is Correct SESSION variables are created
            if ($isPasswordCorrect) {
                $_SESSION['id'] = $checkLogIn['id'];
                $_SESSION['email'] = $email;

                //if the autolog checkbox is selected COOKIES are created
                if (isset($_POST['autoLogIn'])) {
                    setcookie('id', $checkLogIn['id'], time() + 365*24*3600, null, null, false, true);
                    setcookie('email', htmlspecialchars($_POST['email']), time() + 365*24*3600, null, null, false, true);
                    setcookie('hash_pass', password_hash($_POST['pass'], PASSWORD_DEFAULT), time() + 365*24*3600, null, null, false, true);
                }

                header('Location: index.php?action=dashboard');
                exit;
            } else {
                throw new \Exception('Vérifiez vos identifiants de connexion');
            }
        }
    }

    public function UpdatePassWord($newpass, $id)
    {
        $sessionManager = new SessionManager();
        $UpdatePassWord = $sessionManager->UpdatePass(htmlspecialchars($newpass), $id);
    }

    public function checkCurrentPass($userID)
    {
        $sessionManager = new SessionManager();
        $checkCurrentPass = $sessionManager->checkPass($userID);
        $isPasswordCorrect = password_verify($_POST['currentPass'], $checkCurrentPass['pass']);

        if ($isPasswordCorrect) {
            return true;
        } else {
            return false;
        }
    }

    public function killSession()
    {
        // Delete session variables
        $_SESSION = array();
        session_destroy();
        // Delete autologing cookies
        setcookie('id', '', time() + 365*24*3600, null, null, false, true);
        setcookie('login', '', time() + 365*24*3600, null, null, false, true);
        setcookie('hash_pass', '', time() + 365*24*3600, null, null, false, true);
    }
}
