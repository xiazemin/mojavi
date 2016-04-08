<?php

// +---------------------------------------------------------------------------+
// | This file is part of the Mojavi package.                                  |
// | Copyright (c) 2003 Sean Kerr.                                             |
// |                                                                           |
// | For the full copyright and license information, please view the           |
// | COPYRIGHT file that was distributed with this source code.                |
// +---------------------------------------------------------------------------+

class DefaultFilterList extends FilterList
{

    /**
     * Create a new DefaultFilterList instance.
     *
     * @param controller Controller instance.
     */
    function & DefaultFilterList (&$controller)
    {

        parent::FilterList($controller);

    }

    /**
     * Register module filters.
     *
     * @param filterChain FilterChain instance.
     */
    function registerFilters (&$filterChain)
    {

        // alias inherited data for easy access
        $controller =& $this->_controller;

        require_once($controller->getModuleDir() .
                     'filters/RouteFilter.class.php');

        $filterChain->register(new RouteFilter($controller));

    }

}

?>
