<?php

namespace Api\Core;

use \Slim\App       as App;

use \Api\Core\Containers    as Containers;
use \Api\Core\Configuration as Configuration;

/**
 * Class Application
 * @package Api\Core
 */
class Application
{
    /**
     * @var \Slim\App $appInstance
     */

    public $appInstance;

    /**
     * @var \Psr\Container\ContainerInterface $container
     */

    public $container;

    /**
     * Application constructor.
     *
     * Generates the configuration, creates the app, and sets the container.
     */
    public function __construct()
    {
        $config = new Configuration;
        $config = $config->loadConfig();

        $this->appInstance = new App($config);
        $this->container   = $this->appInstance->getContainer();
    }

    /**
     * bootApplication
     *
     * Calls all of the methods that are required to run the application.
     */
    public function bootApplication()
    {
        new Containers($this->container);

        $this->appInstance->run();
    }
}
