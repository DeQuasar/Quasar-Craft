<?php

namespace Api\Core;

use Psr\Container\ContainerInterface;

/**
 * Class Configuration
 * @package Api\Core
 */

class Configuration
{
    /**
     * @var $path
     */
    private $path;

    /**
     * loadConfig
     *
     * Loads the application configuration file.
     *
     * @return mixed
     */

    public function loadConfig()
    {
        $this->path = realpath(__DIR__ . '/../Config/configuration.php');

        try {
            if (is_readable($this->path)) {
                $config = require_once $this->path;
            } else {
                throw new \Exception('Configuration file not found.');
            }

            return $config;
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
