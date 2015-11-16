<?php
/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/2/2015
 * Time: 4:53 PM
 */
session_start();
if (!isset($_SESSION['username'])) {
    include 'LoginController.php';
    die();
}
//session_destroy();

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
    <header>
        <div id="logo">
            <img src="resources/images/logo1.png">

            <h2>Welcome
                <?php
                if (isset($_SESSION['username'])) {
                    echo $_SESSION['username'] . "</br><a href='?page=Logout'>Logout</a>";
                }
                ?>
            </h2>
        </div>
    </header>
    <div class="clear"></div>
    <div class="contents">
        <aside>
            <nav>
                <a class="btn-danger active" href="index.php">Home Page</a>
                <a class="btn-danger" href="?page=MainSettings">Main Settings</a>
                <a class="btn-danger" href="?page=Sections">Sections</a>
                <a class="btn-danger" href="?page=Pages">Pages</a>
                <a class="btn-danger" href="?page=Comments">Comments</a>
                <a class="btn-danger" href="?page=Library">Library</a>
            </nav>
        </aside>
        <section id="page">
            <?php
            if (@$_GET['page']) {
                $url = "controllers/C_" . $_GET['page'] . ".php";
                if (is_file($url)) {
                    include $url;
                } else {
                    echo 'Requested File Is Not Found';
                }
            } else {
                include './Main.php';
            }
            ?>
        </section>
    </div>
    <div class="clear"></div>
    <footer>
        <p>Copyright reserved - Obada</p>
    </footer>
</div>
<script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
<script src="resources/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>

