<?php

namespace App\Framework;

class Router
{
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
        new \Exception('Ruta no definida per a esta URI.');
    }
    protected static function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if (! method_exists($controller, $action)){
            new \Exception(
                "El {$controller} no respon a l'acció {$action}"
            );
        }
        return (new $controller)->$action();
    }
    public static function redirect($uri = '/'){
        header('Location: '.$uri);
    }
    public function execute($controller,$method)
    {
        $controller = new $controller();
        $controller->$method();
    }
}