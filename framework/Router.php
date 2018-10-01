<?php

namespace App\Framework;

class Router {
    public static $routes = [];
    public function routes()
    {
        return self::$routes;
    }
    public function define($routes)
    {
        self::$routes= $routes;
    }
    public static function direct($uri, $requestType)
    {
        if (array_key_exists($uri, self::$routes[$requestType])) {
            return self::callAction(
                ...explode('@', self::$routes[$requestType][$uri]['controller'])
            );
        }
        new \Exception('Ruta no definida per a aquesta URI.');
    }
    protected static function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)){
            throw new Exception(
                "El {$controller} no respon a l'acció {$action}"
            );
        }
        return (new $controller)->$action();
    }
    public function execute($controller,$method)
    {
        $controller = new $controller();
        $controller->$method();
    }
}