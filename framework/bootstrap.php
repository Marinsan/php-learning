<?php

use Framework\App;
use Framework\Router;

require 'database/Connection.php';
require 'database/QueryBuilder.php';
App::bind('config', require 'config.php');
$routes = require 'app/routes.php';
Router::define($routes);