<?php

	class ConnectionTest extends \PHPUnit_Framework_Testcase
	{

      protected $pdo;

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
      }

      /** @test */
      public function testPDOInstance()
      {
          $this -> assertInstanceOf(PDO::class, $this -> pdo);
      }

  }
