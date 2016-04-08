<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class SecurePage2Action extends Action
{

    /**
     * Create a new SecurePage2Action instance.
     *
     * @param controller Controller instance.
     */
    function & SecurePage2Action (&$controller)
    {

        parent::Action($controller);

    }

    /**
     * Nothing to execute.
     *
     function execute ()
     {

     }
     */

    /**
     * Retrieve the default view to be displayed when getRequestMethods() does
     * not return the current method.
     *
     * @return one of the defined views or a custom view.
     */
    function getDefaultView ()
    {

        return VIEW_SUCCESS;

    }

    /**
     * Retrieve the privilege required to access this action.
     *
     * NOTE: NULL can be returned to specify that an action is secure, but does not
     *       require a specific privilege.
     *
     * NOTE: This will only be called if isSecure() returns TRUE.
     *
     * @return an array containing two values. The first is the privilege name.
     *         The second is the namespace in which the privilege resides.
     *         If no privilege is required, NULL is returned.
     */
    function getPrivilege ()
    {

        return array('SecurePage2', 'AuthenticationExample');

    }

    /**
     * There's nothing to execute, so we're going to skip to the view on any request
     * method.
     */
    function getRequestMethods ()
    {

        return REQ_NONE;

    }

    /**
     * No errors can occur.
     *
     function handleError ()
     {

     }
     */

    /**
     * Determine if this action requires the user to be authenticated.
     *
     * @return TRUE, if this action requires authentication, otherwise FALSE.
     */
    function isSecure ()
    {

        return TRUE;

    }

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
