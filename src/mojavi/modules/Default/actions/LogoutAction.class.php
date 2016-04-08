<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class LogoutAction extends Action
{

    /**
     * Create a new LogoutAction instance.
     *
     * @param controller Controller instance.
     */
    function & LogoutAction (&$controller)
    {

        parent::Action($controller);

    }

    /**
     * Execute the action.
     *
     * @return one of the defined views or a custom view.
     */
    function execute ()
    {

        // alias inherited data for easy access
        $controller =& $this->_controller;
        $user       =& $this->_user;

        $user->setAuthenticated(FALSE);
        $user->removePrivileges();

        // forward to auth page
        $controller->handleRequest(AUTH_MODULE, AUTH_ACTION);

        return VIEW_NONE;

    }

    /**
     * We're not displaying a view.
     *
     function getDefaultView ()
     {

     }
     */

    /**
     * This action is not secure.
     *
     function getPrivilege ()
     {

     }
     */

    /**
     * We're handling all actions.
     *
     function getRequestMethods ()
     {

     }
     */

    /**
     * No errors can possibly occur.
     *
     function handleError ()
     {

     }
     */

    /**
     * This action is not secure.
     *
     function isSecure ()
     {

     }
     */

    /**
     * Nothing to validate.
     *
     function registerValidators (&$validatorManager)
     {

     }
     */

    /**
     * Nothing to validate.
     *
     function validate ()
     {

     }
     */

}

?>
