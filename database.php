<?php

$user = $_SERVER['USER'];
require "/home/$user/config.php";

/*
define("DB_DSN", 'mysql:dbname=bzhanggr_it355');
define("DB_USERNAME", 'bzhanggr');
define("DB_PASSWORD", 'Cp19860719');
*/

Class Database
{
    private $_dbh;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try {
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo 'connected!';
            return $this->_dbh;
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    function registerUser($user)
    {

    }

    function addBook($user, $book)
    {

    }

    function editBook($user, $book)
    {

    }

    function deleteBook($user, $book)
    {

    }
}
