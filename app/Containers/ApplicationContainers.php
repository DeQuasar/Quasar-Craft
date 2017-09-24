<?php

namespace Api\Containers;

use \Api\Controllers\BaseController;

/**
 * Class ApplicationContainers
 * @package Api\Containers
 */

class ApplicationContainers
{
    /**
     * baseController
     *
     * Base controller container.
     *
     * @param $container
     */
    public function baseController($container)
    {
        $container['BaseController'] = function ($container) {
            return new BaseController($container);
        };
    }
}