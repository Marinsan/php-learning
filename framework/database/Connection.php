<?php

//class Connection {
//    public static function connect($config)
//    {
//        try {
//
//            return new PDO(
//                $config['connection'].';dbname='.$config['name'],
//                $config['username'],
//                $config['password']
//            );
//
//        } catch (\PDOException $e) {
//            die('Could not connect: ' . $e);
//        }
//    }
//}

class Connection {
    public static function connect()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php_learning', 'debian-sys-maint', 'h3vBPc4hwZa3734t');
//            return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XpYuavOBcoVff67Q');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}
