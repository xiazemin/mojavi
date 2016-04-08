<?php require_once('_header.php'); ?>

<div class="title">
    Secure Page #1
</div>
<br/>
<div class="text">
    You've made it to secure page #1.
    <br/><br/>
    <a href="<?= $template['global_secure_page'] ?>">Click here</a> to go back to the globally secure page.
    <br/><br/>
    <a href="<?= $template['logout_page'] ?>">Click here</a> to logout.
</div>

<?php require_once('_footer.php'); ?>
