<?php

/*
 * Application configuration file.
 */

return [
    'settings' => [
        'displayErrorDetails'                => true,
        'determineRouteBeforeAppMiddleware'  => true,
        'debug'                              => true,

        'database' => [
            'host'           => '127.0.0.1',
            'username'       => 'root',
            'password'       => '',
            'databaseName'   => 'minecraft'
        ]
    ]
];
