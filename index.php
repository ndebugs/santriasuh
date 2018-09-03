<?php

$classLoader = require './vendor/autoload.php';

use ndebugs\fall\Application;

$properties = parse_ini_file('./config/settings.ini');
Application::init($classLoader, $properties);
