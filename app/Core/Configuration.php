<?php

namespace Api\Core;

use Psr\Container\ContainerInterface;

/**
 * Class Configuration
 * @package Api\Core
 */

class Configuration extends Application
{
    /**
     * Configuration constructor from Application parent.
     *
     * @object \Psr\Container\ContainerInterface $container
     */

    public function __construct()
    {
         parent::__construct();

         return $this->loadConfig();
    }

    /**
     * loadConfig
     *
     * Loads the application configuration file.
     *
     * @return mixed
     */

    public function loadConfig()
    {
        try {
            if (is_readable($this->rootPath . '/app/config/configuration.php')) {
                $config = require_once $this->rootPath . '/app/config/configuration.php';
            } else {
                throw new \Exception('Configuration file is not readable.');
            }

            return $this->container->get('settings')->replace($config);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
