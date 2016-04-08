<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class SecurePage1View extends View
{

    /**
     * Create a new SecurePage1View instance.
     *
     * @param controller Controller instance.
     */
    function & SecurePage1View (&$controller)
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

        $globalSecureURL = $controller->getControllerPath('Default', 'GlobalSecure');
        $logoutURL = $controller->getControllerPath('Default', 'Logout');

        $renderer =& new Renderer($controller, 'secure_page1.php');
        $renderer->setAttribute('global_secure_page', $globalSecureURL);
        $renderer->setAttribute('logout_page', $logoutURL);
        $renderer->setAttribute('title', 'Secure Page #1');

        return $renderer;

    }

}

?>
