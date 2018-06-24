<?php

  use App\Models\User\Login;
  use App\Models\User\Customer;

	class LoginTest extends \PHPUnit_Framework_Testcase
	{

    protected $login;
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

			$this -> loginInstance = new Login('Yeab13', 'password', $this -> queryInstance);
		}

    /** @test */
    public function testLogin()
    {
      $this -> assertInstanceOf(Customer::getClass(),$this -> loginInstance -> login());
    }



	}
