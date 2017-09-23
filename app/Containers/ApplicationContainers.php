<?php

namespace Api\Containers;

use \Api\Controllers\BaseController;
use \Api\Core\Configuration;

/**
 * Class ApplicationContainers
 * @package Api\Containers
 */

class ApplicationContainers
{
    /**
     * BaseController Container
     *
     * Base Controller container for the application controllers.
     *
     * @object $container
     *
     * @return \Api\Controllers\BaseController
     */

    public function baseController($container)
    {
        $container['BaseController'] = function ($container) {
            return new BaseController($container);
        };
    }

    public function Config($container)
    {
        $container['config'] = function ($container) {
            return new Configuration($container);
        };
    }
}