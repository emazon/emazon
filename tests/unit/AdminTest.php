<?php

	class AdminTest extends \PHPUnit_Framework_Testcase
	{

    protected $user;

		public function setUp()
    {
			    $this -> user = new \App\Models\User\Admin('admin', 'admin');
		}

    /** @test */
    public function testPreSetUsername()
    {
          $this -> assertEquals($this -> user -> getUserName(), 'admin');
    }

    /** @test */
    public function testPreSetPassword()
    {
          $this -> assertEquals($this -> user -> getPassword(), 'admin');
    }

    

	}
