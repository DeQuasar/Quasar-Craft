<?php

namespace Api\Core;

use Dotenv\Dotenv;

class Configuration
{
    private $config;

    public function __construct()
    {
        return $this->config = new Dotenv(__DIR__ . '../Config');
    }

    public function getConfig()
    {
        return $this->config;
    }
}
