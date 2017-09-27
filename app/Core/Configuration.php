<?php

namespace Api\Core;

/**
 * Class Configuration
 * @package Api\Core
 */
class Configuration
{

    /**
     * @var
     */
    private $path;

    /**
     * loadConfig
     *
     * Loads the application configuration file.
     *
     * @return mixed
     */
    public function __construct($path)
    {
        return $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function loadConfig()
    {
        $path = $this->path . 'app/Core/Config/configuration.php';

        try {
            if (is_readable($path)) {
                $config = require_once $path;
            } else {
                throw new \Exception('Configuration file not found.');
            }

            return $config;
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}
