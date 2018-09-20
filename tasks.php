<?php
//require 'models/Task.php';
//new Task();

$tasks = [
    [
        'name' => 'Comprar pa',
        'completed' => false
    ],
    [
        'name' => 'Comprar llet',
        'completed' => true
    ],
    [
        'name' => 'Estudiar PHP',
        'completed' => false
    ]
];

$tasks = [
    new Task( 'comprar pa',  false),
    new Task( 'comprar llet',  false),
    new Task( 'Estudiar PHP',  false),
]
require 'views/tasks.blade.php';