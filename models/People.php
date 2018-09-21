<?php
class People
{
    public $name;
    public $dni;
    /**
     * People constructor.
     * @param $name
     * @param $dni
     */
    public function __construct($name = '', $dni = false)
    {
        $this->name = $name;
        $this->dni = $dni;
    }

    public static function all()
    {
        $pdo = Connection::connection();
        return QueryBuilder::fetchAll($pdo,'people');
    }
}