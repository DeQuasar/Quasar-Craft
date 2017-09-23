<?php

namespace Api\Core;

use ReflectionClass as Reflection;

/**
 * Class Containers
 * @package Api\Core
 */

class Containers extends Application
{
    /**
     * Containers constructor.
     */

    public function __construct()
    {
        parent::__construct();

        return $this->bootContainers();
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

        foreach ($reflection->getMethods() as $key => $method) {
            $methodName = $method->name;

            $class->{$methodName}($this->container);
        };
    }
}