<?php

use Framework\Router;

require 'vendor/autoload.php';
require 'framework/bootstrap.php';
// $router = new Router();

Router::direct($_SERVER['REQUEST_URI']);

//require Router::direct($_SERVER['REQUEST_URI']);

// FC -> FRONT CONTROLLER -> un sol fitxer php (index.php) executa tota l'aplicacio
// SEMPRE s'executa primer index.php
// URI
// ROUTEE per URI

// Dos opcions
// Funcio global
// Metode dins d'una classe (funcio dins d'una classe el seu nom tecnic es metode)

//require $router->direct($uri);

//require Route::direct($uri);