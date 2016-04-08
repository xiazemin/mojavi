<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class GlobalSecureView extends View
{

    /**
     * Create a new GlobalSecureView instance.
     *
     * @param controller Controller instance.
     */
    function & GlobalSecureView (&$controller)
    {

        parent::View($controller);

    }

    /**
     * Nothing to cleanup.
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

        $logoutURL  = $controller->getControllerPath('Default', 'Logout');
        $secure1URL = $controller->getControllerPath('Default', 'SecurePage1');
        $secure2URL = $controller->getControllerPath('Default', 'SecurePage2');

        $renderer =& new Renderer($controller, 'global_secure.php');
        $renderer->setAttribute('logout_url', $logoutURL);
        $renderer->setAttribute('secure_page1_url', $secure1URL);
        $renderer->setAttribute('secure_page2_url', $secure2URL);
        $renderer->setAttribute('title', 'Globally Secure Page');

        return $renderer;

    }

}

?>
