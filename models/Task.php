<?php

class Task
{
    //PROPIETATS
    public $name;
    public $completed;

    //CONSTRUCTOR
    /**
     * Task constructor.
     * @param $name
     * @param $completed
     */
    public function __construct($name, $completed)
    {
        $this->name = $name;
        $this->completed = $completed;
    }

    // ORGANITZAR
    public function completed()
    {
    $this->completed=true;
    }

}