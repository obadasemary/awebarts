<form action="" method="post" class="mainSettingsForm">
    <!--    `site_name`, `site_url`, `site_dcsc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss` ,`username`-->

    <label>Site Name</label>
    <input type="text" name="site_name" value="<?php echo $displayData['site_name']; ?>">
    <label>Site Url</label>
    <input type="text" name="site_url" value="<?php echo $displayData['site_url']; ?>">
    <label>Email</label>
    <input type="email" name="site_email" value="<?php echo $displayData['site_email']; ?>">
    <label>Site Description</label>
    <textarea name="site_dcsc"><?php echo $displayData['site_dcsc']; ?></textarea>
    <label>Site Tags</label>
    <textarea name="site_tags"><?php echo $displayData['site_tags']; ?></textarea>
    <label>Home Panal Notes</label>
    <textarea name="site_homepanel"><?php echo $displayData['site_homepanel']; ?></textarea>
    <label>Facebook</label>
    <input type="text" name="fb" value="<?php echo $displayData['fb']; ?>">
    <label>Twitter</label>
    <input type="text" name="tw" value="<?php echo $displayData['tw']; ?>">
    <label>Youtube</label>
    <input type="text" name="yt" value="<?php echo $displayData['yt']; ?>">
    <label>RSS</label>
    <input type="text" name="rss" value="<?php echo $displayData['rss']; ?>">

    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">

    <input class="btn-lg btn-primary" type="submit" name="submit" value="Update">
</form>