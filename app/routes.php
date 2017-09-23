<?php

$routes = $application->appInstance;

$routes->group('/v1', function() {

    $this->map(['GET'], '/home', \Api\Controllers\HomeController::class . ':index');

});