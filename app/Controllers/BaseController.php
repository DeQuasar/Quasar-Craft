<?php

namespace Api\Controllers;

use \Psr\Container\ContainerInterface;

/**
 * Class BaseController
 * @package Api\Controllers
 */

class BaseController
{
    /**
     * @var \Psr\Container\ContainerInterface $container
     */

    protected $container;

    /**
     * BaseController constructor.
     *
     * Instantiates the container for children controllers.
     *
     * @param \Psr\Container\ContainerInterface $container
     */

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}
