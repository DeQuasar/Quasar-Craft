<?php

namespace Api\Config;

class Application
{
    public function __construct()
    {
        return [
            'settings' => [
                'displayErrorDetails'                => true,
                'determineRouteBeforeAppMiddleware'  => true,
            ]
        ];
    }
}