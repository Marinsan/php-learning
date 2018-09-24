<?php

function view($view){
    return "views/$view.blade.php";
}

function direct($uri) {
//sagafaran dun fitxer routes.php
    $routes = [
      '/tasks' => 'controllers/tasks.php',
      '/people' => 'controllers/people.php',
      '/lessons' => 'controllers/lessons.php',
      '/about' => 'controllers/about.php',
      '/contact' => 'controllers/contact.php'
    ];
//Route::define('tasks','cotroller
    if (array_key_exists($uri,$routes)) {
        return $routes[$uri];
    } else {
        new Exception('La pàgina web que demaneu no existeix');
    }

}