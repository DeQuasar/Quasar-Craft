<?php

namespace Api\Core;

use \Api\Core\Application;

/**
 * Class Configuration
 * @package Api\Core
 */

class Configuration extends Application
{
    /**
     * loadConfig
     *
     * Loads the application configuration file.
     *
     * @return mixed
     */

    public function loadConfig()
    {
        $path = $this->basePath . 'app/Config/configuration.php';

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
