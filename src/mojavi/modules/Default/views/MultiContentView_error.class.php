<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class MultiContentView extends View
{

    /**
     * Create a new MultiContentView instance.
     *
     * @param controller Controller instance.
     */
    function & MultiContentView (&$controller)
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

        $renderer =& new Renderer($this->_controller, 'multi_content_error.php');

        $renderer->setAttribute('examples_lib', $this->_controller->getModuleDir() .
                                                'lib/examples.inc');
        $renderer->setAttribute('title', 'Multiple Content Types - Error');

        return $renderer;

    }

}

?>
