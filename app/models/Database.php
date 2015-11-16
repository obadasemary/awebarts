<?php

/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/12/2015
 * Time: 1:36 PM
 */
class Database
{
    private $host;
    private $user;
    private $password;
    private $database;

    /**
     * Database constructor.
     * @param $filename
     */
    function __construct($filename)
    {
        if (is_file($filename)) {
            include $filename;
        } else {
            throw new Exception("Error!");
        }

        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    /**
     * @throws Exception
     */
    private function connect()
    {
        //Connect to the server
        if (!mysql_connect($this->host, $this->user, $this->password)) {
            throw new Exception("Error : Not Connected To The Server.");
        }
        //Select the database
        if (!mysql_select_db($this->database)) {
            throw new Exception("Error : No Database Selected");
        } else {
//            echo "OK";
        }
    }

    /**
     *close Database
     */
    function close()
    {
        mysql_close();
    }
}