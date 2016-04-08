<?php require_once('_header.php'); ?>

<div class="title">
    Multiple Content Types
</div>
<br/>
<div class="text">
    The content type you specified is not one of the options.
    <br/><br/>
    <a href="<?= $mojavi['current_module_path'] ?>">Click here</a> to go back to the Default module index,
    or select another example from the following list:
    <br/><br/>
    <?php require_once($template['examples_lib']); ?>
</div>

<?php require_once('_footer.php'); ?>
