<?php

namespace Api\Controllers;

use \Psr\Container\ContainerInterface;

/**
 * Class HomeController
 * @package Api\Controllers
 */
class HomeController extends BaseController
{
    /**
     * HomeController constructor.
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
        parent::__construct($container);
    }

    /**
     *
     */
    public function index($request, $response, $args)
    {
        print_r($this->container);
    }
}
