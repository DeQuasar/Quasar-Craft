<?php

/*
 * Application Routes.
 */

$routes = $application->appInstance;

$routes->group('/v1', function() {
    $this->get('/home', \Api\Controllers\HomeController::class . ':index');
});


