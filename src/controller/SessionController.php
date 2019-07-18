<?php

namespace AlexisGautier\PersonalWebsite\Controller;

// require_once('src/model/manager/SessionManager.php'); // FIXME : a remettre si l'autoload déconne
use \AlexisGautier\PersonalWebsite\Model\Manager\SessionManager;

class SessionController
{
    public function checkSession()
    {
        //check wether I'm registered with COOKIE or SESSION
        if (isset($_COOKIE['email'])) {
            $cookieOrSessionEmail = $_COOKIE['email'];
            return $cookieOrSessionEmail;
        } elseif (isset($_SESSION['email'])) {
            $cookieOrSessionEmail = $_SESSION['email'];
            return $cookieOrSessionEmail;
        }
    }

    public function checkLog($email)
    {
        $sessionManager = new SessionManager();
        $checkLogIn = $sessionManager->checkLogIn($email);

        // Check is password matches the one registered in DB
        $isPasswordCorrect = password_verify(htmlspecialchars($_POST['pass']), $checkLogIn['pass']);
        if (!$checkLogIn) {
            throw new \Exception('Check your login information');
        } else {   //if the password is Correct SESSION variables are created
            if ($isPasswordCorrect) {
                $_SESSION['id'] = $checkLogIn['id']; //FIXME : useless ? on se sert de l'email et pas de l'ID
                $_SESSION['email'] = $email;

                //if the autolog checkbox is selected COOKIES are created
                if (isset($_POST['autoLogIn'])) {
                    setcookie('id', $checkLogIn['id'], time() + 365*24*3600, null, null, false, true);
                    setcookie('email', htmlspecialchars($_POST['email']), time() + 365*24*3600, null, null, false, true);
                    setcookie('hash_pass', password_hash($_POST['pass'], PASSWORD_DEFAULT), time() + 365*24*3600, null, null, false, true);
                }

                header('Location: index.php?action=packQuotesAdmin&page=1&sortBy=10');
                exit;
            } else {
                throw new \Exception('Check your login information');
            }
        }
    }

    public function UpdatePassWord($newpass, $email)
    {
        $sessionManager = new SessionManager();
        $UpdatePassWord = $sessionManager->UpdatePass(htmlspecialchars($newpass), $email);
    }


    public function checkCurrentPass($email)
    {
        $sessionManager = new SessionManager();
        $checkCurrentPass = $sessionManager->checkPass($email);
        $isPasswordCorrect = password_verify($_POST['currentPass'], $checkCurrentPass['pass']);

        if ($isPasswordCorrect) {
            return true;
        } else {
            return false;
        }
    }

    public function checkNewPassValidity($newPass)
    {
        $accentedCharactersNewPass = "àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ";

        //needed to check the current pass in DB from the right user (email)
        $cookieOrSessionEmail = $this->checkSession();

        if ($this->checkCurrentPass($cookieOrSessionEmail) == true) {
            if (preg_match("#^[a-z".$accentedCharactersNewPass ."0-9._!?-]{8,20}$#i", $_POST['newPass'])) {
                //if the password is Correct check if current and new pass are the same
                if ($_POST['currentPass'] != $_POST['newPass']) {

                    return true;

                } else {
                    throw new \Exception('Votre nouveau password est le même que l\'actuel');
                }
            } else {
                throw new \Exception('Votre nouveau password n\'est pas conforme');
            }
        } else {
            throw new \Exception('Votre password actuel n\'est pas le bon');
        }

    }

    public function killSession()
    {
        // Delete  variables
        $_SESSION = array();
        session_destroy();
        // Delete autologing cookies
        setcookie('id', '', time() - 3600, null, null, false, true);
        setcookie('email', '', time() - 3600, null, null, false, true);
        setcookie('hash_pass', '', time() - 3600, null, null, false, true);
    }
}
