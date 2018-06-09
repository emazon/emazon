<?php

	class UserTest extends \PHPUnit_Framework_Testcase
	{

    protected $user;

		public function setUp()
    {
			$this -> user = new \App\Models\User\Customer('Yab', 'Password');
		}

    /** @test */
    public function testPreSetUsernamePassword()
    {
      $this -> assertEquals($this -> user -> getUserName(), 'Yab');
      $this -> assertEquals($this -> user -> getPassword(), 'Password');
    }

    /** @test */
		public function testFirstName()
    {
      $this -> user -> setFirstName('Billy');
      $this->assertEquals($this -> user -> getFirstName(),'Billy');
    }





	}
