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
        $container['BaseController'] = function ($c) {
            return new BaseController($c);
        };
    }

    /**
     * @param $container
     */

    public function config($container)
    {
        $container['config'] = function ($c) {
            echo 'test';

            //return new Configuration($c);
        };
    }
}