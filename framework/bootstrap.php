<?php


use App\Framework\App;
use App\Framework\Router;

require 'database/Connection.php';
require 'database/QueryBuilder.php';
App::bind('config',require 'config.php');
$routes = require 'app/routes.php';
Router::define($routes);
