<!-- add new section -->
<form class="mainSettingsForm addSection" action="" method="post">
    <h1>
        Add New Section :
    </h1>
    <!--    `sectionId`, `sectionName`, `sectionStatus`, `sectionLocation`, `sectionDesc`, `sectionDate`, `username`-->
    <label>Section Name</label>
    <input type="text" name="sectionName" placeholder="Please right section title.">

    <p>
        <label>Section Status</label>
        <select name="sectionStatus">
            <option value="active">Active</option>
            <option value="inActive">Inactive</option>
        </select>
    </p>

    <p>
        <label>Section Location</label>
        <select name="sectionLocation">
            <option value="side">Side</option>
            <option value="body">Body</option>
        </select>
    </p>

    <label>Section Description</label>
    <textarea name="sectionDesc" placeholder="Please right section Description."></textarea>

    <input class="btn-lg btn-primary" type="submit" name="submit" value="Add">

</form>