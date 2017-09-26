<?php

/*
 * Application Routes.
 */

$router = $app->getApp();

$router->group('/v1', function () {
    $this->get('/home', \Api\Controllers\HomeController::class . ':index');
});
