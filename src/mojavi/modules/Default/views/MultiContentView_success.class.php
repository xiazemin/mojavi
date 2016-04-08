<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class MultiContentView extends View
{

    /**
     * Create a new MultiContentView instance.
     *
     * @param controller Controller instance.
     */
    function & MultiContentView (&$controller)
    {

        parent::View($controller);

    }

    /**
     * There's no cleanup to do for this view.
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
        $request    =& $this->_request;

        // create a new Renderer instance
        $renderer =& new Renderer($controller);

        // let's find out what content type to use
        $ctype = $request->getParameter('ctype');

        if ($ctype == NULL)
        {

            // default to html
            $ctype = 'html';

        }

        // genURL params
        $params = array('module' => 'Default',
                        'action' => 'MultiContent',
                        'ctype'  => 'xml');

        // generate a URL to the XML example
        $xmlURL = $controller->genURL($params, URL_FORMAT);

        $renderer->setAttribute('examples_lib', $controller->getModuleDir() .
                                                'lib/examples.inc');
        $renderer->setAttribute('title', 'Multiple Content Types');
        $renderer->setAttribute('xml_url', $xmlURL);
        $renderer->setTemplate("multi_content.{$ctype}.php");

        return $renderer;

    }

}

?>
