<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class PageNotFoundView extends View
{

    /**
     * Create a new PageNotFoundView instance.
     *
     * @param controller Controller instance.
     */
    function & PageNotFoundView (&$controller)
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

        $renderer =& new Renderer($this->_controller, 'page_not_found.php');

        $renderer->setAttribute('action', $this->_request->getAttribute('org.mojavi.action'));
        $renderer->setAttribute('module', $this->_request->getAttribute('org.mojavi.module'));
        $renderer->setAttribute('title', 'Page Not Found');

        return $renderer;

    }

}

?>
