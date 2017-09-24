<?php

namespace Api\Core;

use \Api\Containers\ApplicationContainers;
use \ReflectionClass as Reflection;

/**
 * Class Containers
 * @package Api\Core
 */

class Containers
{

    /**
     * @object $container
     */
    protected $container;

    /**
     * Containers constructor.
     *
     * Sets the container object then boots the containers.
     */

    public function __construct($container)
    {
        $this->container = $container;

        $this->bootContainers();
    }

    /**
     * bootContainers
     *
     * Gathers all of the methods in the ApplicationContainers class file and calls them.
     */
    private function bootContainers()
    {
        $class      = new ApplicationContainers;
        $reflection = new Reflection($class);

        foreach ($reflection->getMethods() as $key => $method) {
            $methodName = $method->name;

            $class->{$methodName}($this->container);
        }
    }
}