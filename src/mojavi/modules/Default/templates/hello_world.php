<?php require_once('_header.php'); ?>

<div class="title">
     Hello, World!
</div>
<br/>
<div class="text">
    Welcome to the Hello, World example. This does nothing but show you the very basics of creating an action.
    <br/><br/>
    <a href="<?= $mojavi['current_module_path'] ?>">Click here</a> to go back to the Default module index,
    or select another example from the following list:
    <br/><br/>
    <?php require_once($controller->getModuleDir() . 'lib/examples.inc'); ?>
</div>

<?php require_once('_footer.php'); ?>
