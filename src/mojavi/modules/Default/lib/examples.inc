<form method="get" action="<?= $controller->getControllerPath('Default', 'SelectExample') ?>">
    <select name="example">
        <option value="HelloWorld">Hello, World!</option>
        <option value="Login">Authentication</option>
        <option value="MultiContent">Multiple Content Types</option>
    </select>
    <input type="submit" value="GO"/>
</form>
