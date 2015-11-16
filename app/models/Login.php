<?php

/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/12/2015
 * Time: 1:35 PM
 */
class Login
{
    private $username;
    private $password;
    private $cxn; //database object

    /**
     * Login constructor.
     */
    function __construct($username, $password)
    {
        // set Data
        $this->setData($username, $password);
        // connect DB
        $this->connectToDb();
        // get Data
        return $this->getData();
    }

    /**
     * @param $username
     * @param $password
     */
    private function setData($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     *
     */
    private function connectToDb()
    {
        include 'Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }

    /**
     *
     */
    function getData()
    {
        $query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password' ";
        $sql = mysql_query($query);

        if (mysql_num_rows($sql) > 0) {

            return true;
        } else {
            throw new Exception("Username OR Password Is Invalid");
        }
    }

    /**
     *
     */
    function close()
    {
        $this->cxn->close();
    }
}