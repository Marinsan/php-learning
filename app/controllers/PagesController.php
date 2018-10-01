<?php

# Per no tenir un fitxer per a cada controlador, les reunim en sols un.


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
}

