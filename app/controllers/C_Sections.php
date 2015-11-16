<h3>Sections</h3>

<h2><a href="?page=Sections&action=add">Add New Section</a></h2>
<!--    `sectionId`, `sectionName`, `sectionStatus`, `sectionLocation`, `sectionDesc`, `sectionDate`, `username`-->

<?php

if ($_POST || @$_GET['action']) {
    if (isset($_GET['action']) && $_GET['action'] == "add") {
        include "views/v_addSection.php";
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
        $data['sectionName'] = $_POST['sectionName'];
        $data['sectionStatus'] = $_POST['sectionStatus'];
        $data['sectionLocation'] = $_POST['sectionLocation'];
        $data['sectionDesc'] = $_POST['sectionDesc'];
        $data['username'] = $_SESSION['username'];

        $tablename = "sections";

        try {
            include "models/General.php";
            include "models/Add.php";

            $addNewSec = new Add($data, $tablename);

            if ($addNewSec) {
                echo '<script type="text/javascript">alert("The New Section was added !"); history.back();</script>';
            }

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
} else {

    include "models/General.php";
    include "models/Display.php";
    $tablename = "sections";

    $displaySection = new Display($tablename);
    $displayData = $displaySection->getAllData();


    include "views/v_sections.php";
}

?>