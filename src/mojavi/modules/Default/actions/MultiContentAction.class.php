<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class MultiContentAction extends Action
{

    /**
     * Create a new MultiContentAction instance.
     *
     * @param controller Controller instance.
     */
    function & MultiContentAction (&$controller)
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

        // if this action gets executed, than we know validation completed.
        // and since there is no logic to be executed for this action, we can
        // simply return the view we want to show.
        return VIEW_SUCCESS;

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

        return VIEW_ERROR;

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
        // content types. if the 'ctype' parameter is set to something other
        // than one of these options, the validation will fail and the error
        // view will be shown.
        $validator =& new ChoiceValidator($controller);

        $params = array('sensitive' => FALSE,
                        'choices'   => array('html', 'wml', 'xml'));

        $validator->initialize($params);
        $validatorManager->register('ctype', $validator, FALSE);

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
