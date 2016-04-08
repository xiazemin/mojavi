<?php require_once('_header.php'); ?>

<div class="title">
    Example Selection
</div>
<br/>
<div class="text">
    Please select an example from the following list:
    <br/><br/>
    <?php require_once($template['examples_lib']); ?>
    <a href="<?= $mojavi['current_module_path'] ?>">Click here</a> to go back to the Default module index.
</div>

<?php require_once('_footer.php'); ?>
