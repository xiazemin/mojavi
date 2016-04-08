<?php require_once('_header.php'); ?>

<div class="title">
    Login
</div>
<br/>
<form method="post" action="<?php echo $mojavi['current_action_path'] ?>">
    <table border="0" cellpadding="5" cellspacing="0">
        <?php if (isset($template['errors']['login'])) { ?>
            <tr>
                <td class="error" colspan="2"><?php echo $template['errors']['login']; ?></td>
            </tr>
        <? } ?>
        <tr>
            <td class="text-bold">Username:</td>
            <td><input type="text" name="username" maxlength="25" value="<?php echo $template['username']; ?>"/></td>
        </tr>
        <?php if (isset($template['errors']['username'])) { ?>
            <tr>
                <td class="error" colspan="2"><?php echo $template['errors']['username']; ?></td>
            </tr>
        <? } ?>
        <tr>
            <td class="text-bold">Password:</td>
            <td><input type="password" name="password" maxlength="25"/></td>
        </tr>
        <?php if (isset($template['errors']['password'])) { ?>
            <tr>
                <td class="error" colspan="2"><?php echo $template['errors']['password']; ?></td>
            </tr>
        <? } ?>
        <tr>
            <td align="center" colspan="2">
                <input type="submit" value="Login"/>
            </td>
        </tr>
        <tr>
            <td class="text" colspan="2">
                <hr size="1" noshade="noshade"/>
                For example purposes, the username is <span class="text-bold">user</span> and
                the password is <span class="text-bold">pass</span>.
                <br/><br/>
                <a href="<?= $mojavi['current_module_path'] ?>">Click here</a> to go back to the Default module index,
                or select another example from the following list:
            </td>
        </tr>
    </table>
</form>

<div class="text">
    <?php require_once($controller->getModuleDir() . 'lib/examples.inc'); ?>
</div>

<?php require_once('_footer.php'); ?>
