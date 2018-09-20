<?php


use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    /**
     * @tests
     */

    public function testTaskclass()
    {
        $task = new Task();
        $this->assertInstanceOf(Task::class,$task);
    }





    public function task ()
    {
        require_once('../taskphp.php');

    }
//    public function testMyFunction() {
////        include_once 'path/to/script.php';
////        $result = someFunction();
////
////        $this->assertEquals('expected result', $result);
//    }
//
//    public function testHelloWorld ()
//    {
//        require('../hello2.php');
//        $this->expectOutputString('hola mon');
//    }
//    public function testMyFunction() {
////        include_once 'path/to/script.php';
////        $result = someFunction();
////
////        $this->assertEquals('expected result', $result);
//    }
//
    /**
     * @tests
     */

    public function can_create_a_task_with_a_name()
    {
        $task = new Task('comprar pa');

        $this->assertEquals('expected result', 'comprar pa',$task->name);
        // Propietats
        echo $task->name;
    }

    public function can_create_a_task_with_an_status()
    {


        $this->assertEquals('expected result', 'comprar pa',false);
        $this->assertEquals('expected result', 'comprar pa',$task->name);
        $this->assertEquals('expected result', 'comprar pa',completed);
        // Propietats
        //echo $task->name;
    }

    public function can_complete_a_task()
    {
        // Preparar
        $this->assertEquals('expected result', 'comprar pa',false);
        // Executar
        $task->complete();
        // Comprovar
        $this->assertEquals(exprected: true, 'comprar pa',true);
    }



}

