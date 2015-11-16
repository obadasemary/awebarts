<!--    `id`, `sectionName`, `sectionStatus`, `sectionLocation`, `sectionDesc`, `sectionDate`, `username`-->
<table class="table table-hover table-bordered section-table">
    <tr class="label-danger">
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
        <th>Location</th>
        <th>Description</th>
        <th>Date</th>
        <th>Created By</th>
        <th>Actions</th>
    </tr>
    <?php
    for ($i = 0; $i < count($displayData); $i++) {
        echo "
            <tr>
                <td>{$displayData[$i]['id']}</td>
                <td>{$displayData[$i]['sectionName']}</td>
                <td>{$displayData[$i]['sectionStatus']}</td>
                <td>{$displayData[$i]['sectionLocation']}</td>
                <td>{$displayData[$i]['sectionDesc']}</td>
                <td>{$displayData[$i]['sectionDate']}</td>
                <td>{$displayData[$i]['username']}</td>
                <td>
                    <img src='resources/images/edit.png'>
                    <img src='resources/images/delete.png'>
                </td>
            </tr>
        ";
//        echo "
//              <tr>
//                <td>{$displayData[$i]['id']}</td>
//                <td>{$displayData[]['sectionName']}</td>
//              </tr>
//              ";
    }
    ?>

</table>

