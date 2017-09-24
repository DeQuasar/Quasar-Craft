<?php

/*
 * Quasar-Craft - A Minecraft Content Management System
 *
 * @package Quasar-CMS
 * @author  Anthony Protano <anthony.protano.ii@gmail.com>
*/

require 'vendor/autoload.php';

$application = new \Api\Core\Application;

require_once 'app/routes.php';

$application->bootApplication();