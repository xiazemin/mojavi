<?php require_once('_header.php'); ?>

<div class="title">
    Page Not Found
</div>
<br/>
<div class="text">
    The specified module or action does not exist.
    <br/><br/>
    <span class="text-bold">Module:</span> <?= $template['module'] ?>
    <br/>
    <span class="text-bold">Action:</span> <?= $template['action'] ?>
</div>

<?php require_once('_footer.php'); ?>
