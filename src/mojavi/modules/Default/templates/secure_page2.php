<?php require_once('_header.php'); ?>

<div class="title">
    Secure Page #2
</div>
<br/>
<div class="text">
    You've made it to secure page #2.
    If you're here, you probably hacked the SecurePage2Action.class.php file. Good job.
    <br/><br/>
    <a href="<?= $template['global_secure_page'] ?>">Click here</a> to go back to the globally secure page.
    <br/><br/>
    <a href="<?= $template['logout_page'] ?>">Click here</a> to logout.
</div>

<?php require_once('_footer.php'); ?>
