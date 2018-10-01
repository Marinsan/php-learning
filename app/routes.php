<?php

return [
    'GET' => [
        '/' => [
            'controller' => 'PagesController@tasks',
            'title' => 'Home'
        ],
        '/tasks' => [
            'controller' => 'PagesController@tasks',
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
            'controller' => 'PagesController@store',
            'title' => 'Tasks'
        ],
    ]
];