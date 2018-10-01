<?php

//use PHPUnit\Framework\TestCase;
//
//
//class RouterTest extends TestCase
//{
//    /**
//     * @test
//     */
//
//    public function check_returns_tasks_when_uri_is_null()
//    {
//        $path = Router::direct();
//    }
//    /**
//     * @test
//     */
//    public function check_returns_exception_when_uri_is_wrong()
//    {
//        try {
//            Router::direct('/tasks');
//        } catch (Exception $e) {
//            $this->assertEquals("La pàgina que demaneu no existeix",$e->getMessage());
//        }
//    }
//    /**
//     * @test
//     */
//
//    public function check_returns_tasks_when_uri_is_tasks()
//    {

//        $path = Router::direct('/tasks');

//    }
//
//    /**
//     * @test
//     */
//
//    public function check_returns_exception_when_uri_not_exist()
//    {
//        try {
//            Router::direct('/asdfkjhsdf');
//        } catch (Exception $e) {
//            $this->assertTrue(true);
//    }    }
//
//    /**
//     * @test
//     */
//
