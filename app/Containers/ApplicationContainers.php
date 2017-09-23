<?php

namespace Api\Containers;

class ApplicationContainers
{
    public function BaseController($container)
    {
        $container['BaseController'] = function ($container) {
            return new BaseController($container);
        };
    }
}