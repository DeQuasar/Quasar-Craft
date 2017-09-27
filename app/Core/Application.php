<?php

namespace Api\Core;

use \Slim\App as App;

use \Api\Core\Containers    as Containers;
use \Api\Core\Configuration as Configuration;

/**
 * Class Application
 * @package Api\Core
 */
class Application
{

    /**
     * @var $application
     */
    protected $application;

    /**
     * @var $container
     */
    protected $container;

    /**
     * @var $basePath
     */
    protected $basePath;

    /**
     * Application constructor.
     */
    public function __construct(){}

    /**
     * bootApp
     *
     * Sets protected variables
     */
    public function bootApp()
    {
        $this->basePath  = dirname(dirname(__DIR__)) . '/';

        if (empty($this->application)) {
            $config = $this->bootConfiguration();

            $this->application = new App($config);
        };

        $this->container = $this->getApp()->getContainer();

        $this->bootContainer();

        $this->bootEloquent();
    }

    /**
     * runApp
     *
     * Runs the application.
     *
     * @return object
     */
    public function runApp()
    {
        return $this->application->run();
    }

    /**
     * getApp
     *
     * Returns the application object.
     *
     * @return object
     */
    public function getApp()
    {
        return $this->application;
    }

    /**
     * getContainer
     *
     * Returns the container object.
     *
     * @return object
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * getBasePath
     *
     * Returns the base path.
     *
     * @return string
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * bootConfiguration
     *
     * Loads the configuration files.
     *
     * @return array
     */
    private function bootConfiguration()
    {
        $config = new Configuration($this->getBasePath());
        return $config->loadConfig();
    }

    /**
     * bootContainer
     *
     * Loads the application containers.
     *
     * return mixed
     */
    private function bootContainer()
    {
        $containers = new Containers($this->container);
        return $containers->loadContainers();
    }

    /**
     * bootEloquent
     *
     * Starts the Eloquent ORM.
     *
     * return mixed
     */
    private function bootEloquent()
    {
        $capsule = new \Illuminate\Database\Capsule\Manager;

        $capsule->addConnection($this->container['settings']['database']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $capsule->getContainer()->singleton(
            \Illuminate\Contracts\Debug\ExceptionHandler::class,
            \Api\Exceptions\Handler::class
        );

        return $capsule;
    }
}
