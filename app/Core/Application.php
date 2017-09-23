<?php

namespace Api\Core;

use \Slim\App       as App;
use \Slim\Container as SlimContainer;

use \Api\Core\Containers    as Containers;
use \Api\Core\Configuration as Configuration;

/**
 * Class Application
 * @package Api\Core
 */
class Application
{
    public $rootPath,
           $appInstance,
           $container;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->appInstance = new App(new SlimContainer);
        $this->container   = $this->appInstance->getContainer();
        $this->rootPath    = dirname(dirname(__DIR__)) . '/';

        return $this;
    }

    /**
     * bootApplication
     *
     * Calls all of the methods that are required to run the application.
     */
    public function bootApplication()
    {
        new Containers();
        new Configuration();
    }

    /**
     * runApplication
     *
     * Run's the appInstance.
     */
    public function runApplication()
    {
        $this->appInstance->run();
    }
}
