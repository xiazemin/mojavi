<?php require_once('_header.php'); ?>

<div class="title">
    Multiple Content Types
</div>
<br/>
<div class="text">
    Did you know Mojavi can serve multiple content types? All of your code is reusable for any content type.
    To detect the content type the client expects, simply call $this->_controller->getContentType().
    Then set your renderer template to one that serves the expected content type. It's that simple.
    <br/><br/>
    <a href="<?= $template['xml_url'] ?>">Click here</a> to view this same action in XML format.
    <br/><br/>
    <a href="<?= $mojavi['current_module_path'] ?>">Click here</a> to go back to the Default module index,
    or select another example from the following list:
    <br/><br/>
    <?php require_once($controller->getModuleDir() . 'lib/examples.inc'); ?>
</div>

<?php require_once('_footer.php'); ?>
