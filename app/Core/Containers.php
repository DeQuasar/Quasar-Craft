<?php

namespace Api\Core;

use \Api\Core\Containers\ApplicationContainers;
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
     * @param ContainerInterface $container
     */

    public function __construct(\Psr\Container\ContainerInterface $container)
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

        try {
            foreach ($reflection->getMethods() as $key => $method) {
                $methodName = $method->name;

                if (method_exists($class, $methodName)) {
                    $class->{$methodName}($this->container);
                } else {
                    throw new \Exception('Failed to load containers, ' . $methodName . ' does not exist.');
                }
            }
        } catch(\Exception $e) {
            return die($e->getMessage());
        }

        return true;
    }
}