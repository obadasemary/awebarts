<?php
/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/11/2015
 * Time: 11:26 AM
 */

?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="resources/css/style.css" type="text/css">
    <title>awebarts</title>
</head>
<body>
<div class="container">
    <div class="contents logincont">
        <div class="register">
            <form action="LoginController.php" method="post">
                <h1>Register New User :</h1>
                <input class="input-lg" type="text" required="required" name="name" placeholder="Name">
                <input class="input-lg" type="text" required="required" name="username" placeholder="Username">
                <input class="input-lg" type="password" required="required" name="password" placeholder="Password">
                <input class="input-lg" type="email" required="required" name="email" placeholder="Email">
                <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Register">
            </form>
        </div>
        <div class="login">
            <form action="LoginController.php" method="post">
                <h1>Login :</h1>
                <input class="input-lg" type="text" required="required" name="username" placeholder="Username">
                <input class="input-lg" type="password" required="required" name="password" placeholder="Password">
                <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</div>
<script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
<script src="resources/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
