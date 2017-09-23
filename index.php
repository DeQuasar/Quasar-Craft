<?php

/*
 * Quasar-Craft - A Minecraft Content Management System
 *
 * @package Quasar-CMS
 * @author  Anthony Protano <anthony@anthonyprotano.com>
 */

require 'vendor/autoload.php';

$application = new \Api\Core\Application;

$application->bootApplication();

require 'app/routes.php';

$application->runApplication();