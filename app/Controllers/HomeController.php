<?php

namespace Api\Controllers;

use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;
use \Psr\Container\ContainerInterface;

/**
 * Class HomeController
 * @package Api\Controllers
 */
class HomeController
{
    /**
     * HomeController constructor
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     *
     */
    public function index(RequestInterface $request, ResponseInterface $response, $args)
    {
        return $response->getBody()->write(\Api\Models\Dev::all()->toJson());
    }
}
