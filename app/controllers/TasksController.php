<?php

namespace App\Controllers;
use App\Models\Task;
use App\Framework\Router;


class TasksController
{
    public function index()
    {
        $tasks = Task::all();
        require view('tasks');
    }
    public function store()
    {
        $data=[
            'name' => $_POST['name']
        ];
        Task::create('Tasks',$data);
        return Router::redirect('/tasks');
    }
}