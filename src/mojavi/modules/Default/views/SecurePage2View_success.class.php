<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class SecurePage2View extends View
{

    /**
     * Create a new SecurePage2View instance.
     *
     * @param controller Controller instance.
     */
    function & SecurePage2View (&$controller)
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

        // generate a URL to the Globally Secure example
        $globalSecureURL = $controller->getControllerPath('Default', 'GlobalSecure');
        $logoutURL = $controller->getControllerPath('Default', 'Logout');

        $renderer =& new Renderer($controller, 'secure_page2.php');
        $renderer->setAttribute('global_secure_page', $globalSecureURL);
        $renderer->setAttribute('logout_page', $logoutURL);
        $renderer->setAttribute('title', 'Secure Page #2');

        return $renderer;

    }

}

?>
