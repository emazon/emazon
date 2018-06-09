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
      $this -> user -> setFirstName('Melat');
      $this -> assertEquals($this -> user -> getFirstName(),'Melat');
    }

		/** @test */
		public function testLastName()
    {
      $this -> user -> setLastName('Kirubel');
      $this -> assertEquals($this -> user -> getLastName(),'Kirubel');
    }

		/** @test */
		public function testAddress()
    {
      $this -> user -> setAddress('Bole');
      $this -> assertEquals($this -> user -> getAddress(),'Bole');
    }

		/** @test */
		public function testPhone()
    {
      $this -> user -> setPhone('0912569874');
      $this -> assertEquals($this -> user -> getPhone(),'0912569874');
    }

		/** @test */
		public function testEmail()
    {
      $this -> user -> setEmail('yeab13me@gmail.com');
      $this -> assertEquals($this -> user -> getEmail(),'yeab13me@gmail.com');
    }

		/** @test */
		public function testRole()
    {
      $this -> assertEquals($this -> user -> getRole(),'Customer');
    }

		/** @test */
		public function testJoinedDate()
    {
      $this -> user -> setJoinedDate('2018-4-2');
      $this -> assertEquals($this -> user -> getJoinedDate(),'2018-4-2');
    }

		/** @test */
		public function testProfilePic()
    {
      $this -> user -> setProfilePic('http://localhost/emazonResource/images/logo.png');
      $this -> assertEquals($this -> user -> getProfilePic(),'http://localhost/emazonResource/images/logo.png');
    }

		/** @test */
			public function testSubscriptionStatus()
			{
				$this -> user -> setSubscriptionStatus('Verified');
				$this -> assertEquals($this -> user -> getSubscriptionStatus(), 'Verified');
			}


	}
