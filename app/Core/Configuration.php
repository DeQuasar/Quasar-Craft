<?php

namespace Api\Core;

use Api\Controllers\BaseController;
use Psr\Container\ContainerInterface;

/**
 * Class Configuration
 * @package Api\Core
 */

class Configuration extends BaseController
{
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);

        return $this->loadConfig();
    }

    public function loadConfig()
    {

    }
}
