<?php
namespace AlexisGautier\PersonalWebsite\Model\Manager;
class GlobalManager
{
    protected $_db = null;
    protected $_host ='localhost';
    protected $_dbName ='alexisgautier';
    protected $_charset ='utf8';
    protected $_port ='3306';
    protected $_username = 'root';
    protected $_password = '';

    public function __construct()
    {
        $this->dbConnect();
    }

    // General protected function to connect to database
    protected function dbConnect()
    {
        try {
            $db = new \PDO('mysql:host='. $this->_host.';dbname='. $this->_dbName.';charset='. $this->_charset.';port='. $this->_port,  $this->_username,  $this->_password);
            $this->_db= $db;
        }
        catch(\Exception $e) {
            throw new \Exception('Connexion to database has failed.');
        }

    }
}
