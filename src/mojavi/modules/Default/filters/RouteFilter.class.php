<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class RouteFilter extends Filter
{

    /**
     * Create a new RouteFilter instance.
     *
     * @param controller Controller instance.
     */
    function & RouteFilter (&$controller)
    {

        parent::Filter($controller);

    }

    /**
     * Execute the filter.
     *
     * @param filterChain Filter chain.
     */
    function execute (&$filterChain)
    {

        // alias inherited data for easy access
        $controller =& $this->_controller;
        $request    =& $this->_request;

        $loaded =& $request->getAttribute('RouteFilter');

        if ($loaded == NULL)
        {

            $request->setAttribute('RouteFilter', TRUE);

            $filterChain->execute();

            // print out the route that the request took to get to the
            // destination
            echo "<!--\n";
            echo "RouteFilter:\n";

            $execChain =& $controller->getExecutionChain();
            $requests  =  $execChain->getRequests();
            $count     =  sizeof($requests);

            for ($i = 0; $i < $count; $i++)
            {

                echo "\nRequest #" . ($i + 1) . "\n";
                echo "\tModule Name: " . $requests[$i]['module_name'] . "\n";
                echo "\tAction Name: " . $requests[$i]['action_name'] . "\n";
                echo "\tMicrotime: " . $requests[$i]['microtime'] . "\n";

            }

            echo "-->";

            $request->removeAttribute('RouteFilter');

        } else
        {

            $filterChain->execute();

        }

    }

}

?>
