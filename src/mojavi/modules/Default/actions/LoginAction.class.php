<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class LoginAction extends Action
{

    /**
     * Create a new LoginAction instance.
     *
     * @param controller Controller instance.
     */
    function & LoginAction (&$controller)
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
        $request    =& $this->_request;
        $user       =& $this->_user;

        // validation completed, and since we're not verifying the username and
        // password against a database, we can do a simple check to see if the
        // user entered 'user' for the username and 'pass' for the password.
        // ----
        // we know that username and password will not be NULL and that they
        // are indeed set because the validators do that check for us. that
        // eliminates more checks that would overwise be crammed into this
        // method.
        $username = trim($request->getParameter('username'));
        $password = trim($request->getParameter('password'));

        if (strtolower($username) == 'user' &&
            strtolower($password) == 'pass')
        {

            // user has authenticated successfully
            $user->setAuthenticated(TRUE);

            // add a test privilege for the user
            $user->addPrivilege('SecurePage1', 'AuthenticationExample');

            // forward to the global secure page
            $controller->handleRequest(SECURE_MODULE, SECURE_ACTION);

            // return VIEW_NONE because the request has been forwarded, and a
            // different view has been rendered. if we return something other
            // than VIEW_NONE, it will attempt to render a view for this
            // action as well.
            return VIEW_NONE;

        } else
        {

            // wrong username and password, set an error message
            $request->setError('login', 'The username and password you
                               provided do not match the example user
                               information.');

            // return the form input view again
            return VIEW_INPUT;

        }

    }

    /**
     * Retrieve the default view to be displayed when getRequestMethods() does
     * not return the current method.
     *
     * @return one of the defined views or a custom view.
     */
    function getDefaultView ()
    {

        // show the form input view so they can enter a username and password
        return VIEW_INPUT;

    }

    /**
     * This is not a secure action.
     *
     function getPrivilege ()
     {

     }
     */

    /**
     * Retrieve all request methods this action will handle.
     *
     * NOTE: When a request is made for this action with a different request method
     *       than provided here, the view is determined by getDefaultView().
     *
     * @return one of the defined request methods, or multiple.
     */
    function getRequestMethods ()
    {

        // only validate and execute when a POST request is sent, otherwise
        // skip the the view return from getDefaultView()
        return REQ_POST;

    }

    /**
     * Execute all code that must run if a validation error occurs.
     * This most likely would be useful for logging any useful information
     * or to forward the request to an entirely different action.
     *
     * @return one of the defined views or a custom view.
     */
    function handleError ()
    {

        // alias inherited data for easy access
        $request =& $this->_request;

        // By default, Mojavi sets an error message of 'Required' to any
        // validator that executes on a required parameter. Let's change
        // that message to something meaningful.
        // ----
        // To determine if a value is entered, Mojavi simply checks
        // if the parameter has been set. This means a parameter with the
        // value of a single space and no physical characters, is still
        // a value. We register a StringValidator for password to make sure
        // it's trimmed and then checked, so a single space won't pass
        // through.
        if ($request->getError('username') == 'Required')
        {

            $request->setError('username', 'Please enter a username');

        }

        if ($request->getError('password') == 'Required')
        {

            $request->setError('password', 'Please enter a password');

        }

        // we want to show the form view again, so they can view their errors
        // and correct them
        return VIEW_INPUT;

    }

    /**
     * This is not a secure action.
     *
     function isSecure ()
     {

     }
     */

    /**
     * Register individual parameter validators.
     *
     * @param validatorManager ValidatorManager instance.
     */
    function registerValidators (&$validatorManager)
    {

        // alias inherited data for easy access
        $controller =& $this->_controller;

        require_once(STANDARD_VALIDATOR_DIR . 'RegexValidator.class.php');
        require_once(STANDARD_VALIDATOR_DIR . 'StringValidator.class.php');

        // let's make sure the username specified starts with a letter
        // and contains only alphanumeric characters, underscores and hyphens
        // and is at least 3 characters in length
        $validator =& new RegexValidator($controller);

        $params = array('pattern'       => '/^[a-z][a-z0-9\-_]{2,}$/i',
                        'pattern_error' => 'The username you specified is invalid');

        $validator->initialize($params);
        $validatorManager->register('username', $validator);
        unset($validator);

        // make sure a password is entered
        $validator =& new StringValidator($controller);

        $params = array('min'       => 1,
                        'min_error' => 'Please enter a password',
                        'trim'      => TRUE);

        $validator->initialize($params);
        $validatorManager->register('password', $validator);

    }

    /**
     * We're handling validation with reusable validators in registerValidators(),
     * so we don't need this.
     *
     function validate ()
     {

     }
     */

}

?>
