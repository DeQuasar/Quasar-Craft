<?php

namespace Api\Core;

use \Api\Containers\ApplicationContainers;
use Psr\Container\ContainerInterface;
use \ReflectionClass as Reflection;


/**
 * Class Containers
 * @package Api\Core
 */

class Containers
{

    /**
     * Containers constructor.
     *
     * @param \Psr\Container\ContainerInterface $container
     */

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * bootContainers
     *
     * Gathers all of the methods in the ApplicationContainers class file and calls them.
     */
    public function loadContainers()
    {
        $class      = new ApplicationContainers;
        $reflection = new Reflection($class);

        foreach ($reflection->getMethods() as $key => $method) {
            $methodName = $method->name;

            $class->{$methodName}($this->container);
        }
    }
}