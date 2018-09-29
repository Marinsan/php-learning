<?php

//return [
//    '/' => 'app/controllers/tasks.php',
//    '/tasks' => 'app/controllers/tasks.php',
//    '/people' => 'app/controllers/people.php',
//    '/lessons' => 'app/controllers/lessons.php',
//    '/about' => 'AboutController@show',
//    '/contact' => 'app/controllers/contact.php'
//];

use Framework\Router;

$router = new Router();

$router->get('', 'PagesController@home');
$router->get('tasks', 'PagesController@tasks');
$router->get('people', 'PagesController@people');
$router->get('lessons', 'PagesController@lessons');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');


$router->get('add_tasks', 'AddController@storeTasks');
$router->get('add_person', 'AddController@storePeople');
$router->get('add_lesson', 'AddController@storeLessons');

