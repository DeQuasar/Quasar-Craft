<?php

namespace Api\Core;

use \Slim\App       as App;
use \Slim\Container as SlimContainer;
use \ReflectionClass as Reflection;

use \Api\Core\Configuration as Config;

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
        $this->bootContainers();
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

    /**
     * bootContainers
     *
     * Gathers all of the methods in the ApplicationContainers class file and calls them.
     */
    private function bootContainers()
    {
        $class      = new \Api\Containers\ApplicationContainers;
        $reflection = new Reflection($class);

        foreach($reflection->getMethods() as $key => $method)
        {
            $methodName = $method->name;

            $class->{$methodName}($this->container);
        };
    }
}
