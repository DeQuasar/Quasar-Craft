<?php

/*
 * Application configuration file.
 */

return [
    'settings' => [
        'outputBuffering'                    => false,
        'displayErrorDetails'                => true,
        'determineRouteBeforeAppMiddleware'  => false,
        'debug'                              => true,

        'database' => [
            'driver'    => 'mysql',
            'host'      => '172.18.0.1',
            'port'      => '3306',
            'database'  => 'minecraft',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
    ]
];
