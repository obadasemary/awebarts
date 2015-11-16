<h3>Main Settings</h3>
<?php
/**
 * Created by PhpStorm.
 * User: obada
 * Date: 11/11/2015
 * Time: 11:07 AM
 */
if (isset($_POST['submit']) && $_POST['submit'] == "Update") {
//<!--    `site_name`, `site_url`, `site_dcsc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss` ,`username`-->
    $mainSettings['site_name'] = $_POST['site_name'];
    $mainSettings['site_url'] = $_POST['site_url'];
    $mainSettings['site_dcsc'] = $_POST['site_dcsc'];
    $mainSettings['site_email'] = $_POST['site_email'];
    $mainSettings['site_tags'] = $_POST['site_tags'];
    $mainSettings['site_homepanel'] = $_POST['site_homepanel'];
    $mainSettings['fb'] = $_POST['fb'];
    $mainSettings['tw'] = $_POST['tw'];
    $mainSettings['yt'] = $_POST['yt'];
    $mainSettings['rss'] = $_POST['rss'];
    $mainSettings['username'] = $_POST['username'];

    try {
        include 'models/General.php';
        include 'models/Add.php';
        $addMainSettings = new Add($mainSettings, "main_settings");

        if ($addMainSettings == true) {
            echo "Successfully Added";
        }

    } catch (Exception $exc) {
        echo $exc->getMessage();
    }

} else {
    try {
        include 'models/General.php';
        include 'models/Display.php';
        $display = new Display("main_settings");
        $displayData = $display->getDataLastRecordDESC();


    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
    include "views/v_mainSettings.php";
}


?>


