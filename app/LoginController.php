<?php
/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/12/2015
 * Time: 1:30 PM
 */

if ($_POST) {
    // Login
    if (isset($_POST['submit']) AND $_POST['submit'] == "Login") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        try {
            include 'models/Login.php';
            $login = new Login($username, $password);
            if ($login == true) {
                echo "true";
                session_start();
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    // Register
    if (isset($_POST['submit']) AND $_POST['submit'] == "Register") {
        //`id`, `name`, `username`, `password`, `email`
        $data['name'] = $_POST['name'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['email'] = $_POST['email'];

//        print_r($data);
        try {
            include 'models/Register.php';
            $register = new Register($data);

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }

    }
} else {
    include 'Login.php';
}





