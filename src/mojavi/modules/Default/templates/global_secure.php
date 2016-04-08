<?php require_once('_header.php'); ?>

<div class="title">
    Globally Secure Page
</div>
<br/>
<div class="text">
    As a privilege example, there are two secure pages that both require a privilege.
    <br/><br/>
    <div class="text-bold"><a href="<?= $template['secure_page1_url'] ?>">Secure Page #1</a></div>
    You have access to this page and can access it.
    <br/><br/>
    <div class="text-bold"><a href="<?= $template['secure_page2_url'] ?>">Secure Page #2</a></div>
    You do not have access to this page and if you attempt to access it, you will be forwarded
    directly back to this globally secure page.
    <br/><br/>
    <a href="<?= $template['logout_url'] ?>">Click here</a> to logout.
</div>

<?php require_once('_footer.php'); ?>
