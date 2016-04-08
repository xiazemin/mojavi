<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class GlobalSecureAction extends Action
{

    /**
     * Create a new GlobalSecureAction instance.
     *
     * @param controller Controller instance.
     */
    function & GlobalSecureAction (&$controller)
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
     * We're only securing this action, but not requiring any specific privilege.
     *
     function getPrivilege ()
     {

     }
     */

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
