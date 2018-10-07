<?php

use App\Controllers;

return [
    'GET' => [
        '/' => [
            'controller' => 'TasksController@index',
            'title' => 'Home'
        ],
        '/tasks' => [
            'controller' => 'TasksController@index',
            'title' => 'Tasks'
        ],
        '/people' => [
            'controller' => 'PagesController@people',
            'title' => 'People'
        ],
        '/lessons' => [
            'controller'=>'PagesController@lessons',
            'title' => 'Lessons'
        ],
        '/about' => [
            'controller' => 'PagesController@about',
            'title' => 'About'
        ],
        '/contact' => [
            'controller' => 'PagesController@contact',
            'title' => 'Contact'
        ]
    ],
    'POST' => [
        '/tasks' => [
            'controller' => 'TasksController@store',
            'title' => 'Tasks'
        ],
    ]
];
