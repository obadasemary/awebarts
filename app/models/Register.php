<?php

/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/12/2015
 * Time: 1:35 PM
 */
class Register
{
    private $name;
    private $username;
    private $password;
    private $email;
    private $cxn;  //DB Object

    /**
     * Register constructor.
     * @param $data
     */
    function __construct($data)
    {
        if (is_array($data)) {
            $this->setData($data);
        } else {
            throw new Exception("Error: Data must be in an array");
        }

        // Connect to DB
        $this->connectToDb();

        // insert user data
        $this->rgisterUser();
    }

    /**
     * @param $data
     */
    private function setData($data)
    {
        $this->name = $data['name'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->email = $data['email'];
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
    function rgisterUser()
    {
        $query = "INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES ('','$this->name','$this->username','$this->password','$this->email')";
        $sql = mysql_query($query);
        if ($sql) {
            echo "Registered Successfully";
        } else {
            throw new Exception("Error: Not Registered");
        }
    }

    function close()
    {
        $this->cxn->close();
    }
}