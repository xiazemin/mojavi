<?php

header('Content-type: text/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

?>
<mojavi>
    <title>Multiple Content Types</title>
    <body>
        <![CDATA[
            Did you know Mojavi can serve multiple content types? All of your code is reusable for any content type.
            To detect the content type the client expects, simply call $this->_controller->getContentType().
            Then set your renderer template to one that serves the expected content type. It's that simple.
        ]]>
    </body>
</mojavi>
