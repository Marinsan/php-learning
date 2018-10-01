<?php

namespace App\Controllers;

use App\Framework\App;
use Lessons;
use People;
use Task;

class PagesController
{
    public function tasks()
    {
        $tasks = Task::all();
        require view('tasks');
    }

    public function people()
    {
        $people = People::all();
        require view('people');
    }

    public function lessons()
    {
        $lessons = Lessons::all();
        require view('lessons');
    }

    public function about()
    {
        require view('about');
    }

    public function contact()
    {
        require view('contact');
    }

    public function store()
    {
        $database = App::resolve('database');
        $database->insert('tasks', [
            "name" => $_POST['name']
        ]);
        return view('tasks');
    }
}

