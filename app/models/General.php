<?php

/**
 * Created by PhpStorm.
 * User: obada
 * Main Class will include the main functions
 * Date: 11/15/2015
 * Time: 10:19 PM
 */
class General
{
    private $cxn;

    function connectToDb()
    {
        include 'Database.php';
        $vars = "include/vars.php";
        $this->cxn = new Database($vars);
    }

    function close()
    {
        $this->cxn->close();
    }

}