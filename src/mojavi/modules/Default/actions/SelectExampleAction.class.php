<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class SelectExampleAction extends Action
{

    /**
     * Create a new SelectExampleAction instance.
     *
     * @param controller Controller instance.
     */
    function & SelectExampleAction (&$controller)
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

        // forward to the selected example and return VIEW_NONE
        // so the framework does not attempt to render a view for this action.
        $controller->handleRequest($controller->getCurrentModule(),
                                   $request->getParameter('example'));

        return VIEW_NONE;

    }

    /**
     * No need to override this since this action handles all request methods.
     *
     function getDefaultView ()
     {

     }
     */

    /**
     * This action is not secure, so we do not need to specify a privilege.
     *
     function getPrivilege ()
     {

     }
     */

    /**
     * We don't override this because the default return value is already
     * REQ_GET | REQ_POST, which tells the framework to validate and execute
     * on any request method.
     *
     function getRequestMethods ()
     {

     }
     */

    /**
     * Execute all code that must run if a validation error occurs.
     * This most likely would be useful for logging any useful information
     * or to forward the request to an entirely different action.
     *
     * @return one of the defined views or a custom view.
     */
    function handleError ()
    {

        // don't need to provide any custom error handling, simply
        // return the view we want to display if validation fails.
        // we return VIEW_SUCCESS because although it serves as an
        // error page, it's also an Example index page.
        return VIEW_SUCCESS;

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

        require_once(STANDARD_VALIDATOR_DIR . 'ChoiceValidator.class.php');

        // we're using a ChoiceValidator to enforce a specific list of possible
        // examples.
        $validator =& new ChoiceValidator($controller);

        $params = array('sensitive' => TRUE,
                        'choices'   => array('HelloWorld', 'Login', 'MultiContent'));

        $validator->initialize($params);
        $validatorManager->register('example', $validator, TRUE);

    }

    /**
     * We're handling all of our validation with reusable validators, so we don't
     * need this method.
     *
     function validate ()
     {

     }
     */

}

?>
