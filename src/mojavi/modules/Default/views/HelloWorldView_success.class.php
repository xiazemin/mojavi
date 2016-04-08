<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class HelloWorldView extends View
{

    /**
     * Create a new HelloWorldView instance.
     *
     * @param controller Controller instance.
     */
    function & HelloWorldView (&$controller)
    {

        parent::View($controller);

    }

    /**
     * There's no cleanup to do for this view.
     *
     function cleanup ()
     {

     }
     */

    /**
     * Execute the view.
     *
     * @return a Renderer instance.
     */
    function & execute ()
    {

        // alias inherited data for easy access
        $controller =& $this->_controller;

        $renderer =& new Renderer($controller, 'hello_world.php');

        $renderer->setAttribute('examples_lib', $controller->getModuleDir() .
                                                'lib/examples.inc');
        $renderer->setAttribute('title', 'Hello, World!');

        return $renderer;

    }

}

?>
