<?php

namespace Api\Controllers;

use Psr\Container\ContainerInterface;

/**
 * Class HomeController
 * @package Api\Controllers
 */
class HomeController extends BaseController
{
    public function __construct(\Psr\Container\ContainerInterface $container)
    {
        parent::__construct($container);
    }

    public function index()
    {
        print_r($this->container);
    }
}