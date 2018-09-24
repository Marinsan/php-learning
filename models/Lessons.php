<?php

class Lessons
{
    public $name;
    public $teacher;

    /**
     * Lessons constructor.
     * @param $name
     * @param $teacher
     */
    public function __construct($name = '', $teacher = '')
    {
        $this->name = $name;
        $this->teacher = $teacher;
    }

    public static function all()
    {
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'lessons');
    }
}