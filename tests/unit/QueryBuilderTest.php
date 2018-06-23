<?php

	class QueryBuilderTest extends \PHPUnit_Framework_Testcase
	{

      protected $queryInstance;

      public function setUp()
      {

          $this -> pdo = Connection::make([
              "name" => "emazon",
              "username" => "root",
              "password" => "",
              "connection" => "mysql:host=127.0.0.1",
              "options" => [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              ]
            ]
          );

          $queryClass = QueryBuilder::getClass();
          $this -> queryInstance = new $queryClass($this -> pdo);
      }

      /** @test */
      public function testPDOInstance()
      {
          $this -> assertInstanceOf(PDO::class, $this -> queryInstance -> getInstance());
      }

      /** @test */
      public function testSelectAllQuery()
      {
          $this -> assertNotNull($this -> queryInstance -> selectAll('users'));
      }
  }
