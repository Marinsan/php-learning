<?php

class Router
{
    private static $routes = [];
    public static function routes()
    {
        return self::$routes;
    }
    public static function define($routes)
    {
        self::$routes= $routes;
    }
    public static function direct($uri = null)
    {
        if (!$uri) return 'app/controllers/tasks.php';
        if (array_key_exists($uri,self::$routes)) return self::$routes[$uri];
        throw new Exception('La pàgina que demaneu no existeix');
    }

    public function execute($controller,$method)
    {
        $controller = new $controller();
        $controller -> $method();
    }
}
