<?php

/*
 * Quasar-Craft - A Minecraft Content Management System
 *
 * @package Quasar-CMS
 * @author  Anthony Protano <anthony.protano.ii@gmail.com>
*/

require 'vendor/autoload.php';

$app = new \Api\Core\Application;

$app->bootApp();

require $app->getBasePath() . '/app/routes.php';

$app->runApp();