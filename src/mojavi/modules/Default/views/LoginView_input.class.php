<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class LoginView extends View
{

    /**
     * Create a new LoginView instance.
     *
     * @param controller Controller instance.
     */
    function & LoginView (&$controller)
    {

        parent::View($controller);

    }

    /**
     * We don't have any view data to cleanup.
     *
     function cleanup ()
     {

     }
     /*

    /**
     * Execute the view.
     *
     * @return a Renderer instance.
     */
    function & execute ()
    {

        // alias inherited data for easy access
        $controller =& $this->_controller;
        $request    =& $this->_request;

        $password = $request->getParameter('password');
        $username = $request->getParameter('username');

        if ($username == NULL)
        {

            $username = '';

        }

        $renderer =& new Renderer($controller, 'login.php');
        $renderer->setAttribute('title', 'Login');
        $renderer->setAttributeByRef('errors',   $request->getErrors());
        $renderer->setAttributeByRef('username', htmlspecialchars($username));

        return $renderer;

    }

}

?>
