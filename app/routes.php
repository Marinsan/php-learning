<?php

return [
    'GET' => [
        '/' => [
            'controller' => 'App\Controllers\PagesController@tasks',
            'title' => 'Home'
        ],
        '/tasks' => [
            'controller' => 'App\Controllers\PagesController@tasks',
            'title' => 'Tasks'
        ],
        '/people' => [
            'controller' => 'App\Controllers\PagesController@people',
            'title' => 'People'
        ],
        '/lessons' => [
            'controller'=>'App\Controllers\PagesController@lessons',
            'title' => 'Lessons'
        ],
        '/about' => [
            'controller' => 'App\Controllers\PagesController@about',
            'title' => 'About'
        ],
        '/contact' => [
            'controller' => 'App\Controllers\PagesController@contact',
            'title' => 'Contact'
        ]
    ],
    'POST' => [
        '/tasks' => [
            'controller' => 'App\Controllers\PagesController@store',
            'title' => 'Tasks'
        ],
    ]
];