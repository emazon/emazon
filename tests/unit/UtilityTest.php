<?php

	class UtilityTest extends \PHPUnit_Framework_Testcase
	{

    protected $utility;
		protected $token;
    public function setUp()
    {
      	$this -> utility = new \App\Models\User\Customer('Yab', 'Password');
				$this -> token = new \App\Core\TokenUtility();
    }

    /** @test */
    public function testEmail()
    {
        //$this -> assertTrue(\App\Core\Utility::sendEmail("span13me@gmail.com","Hello", "Psst", "fakeelu@gmail.com"));
    }

		/* -------- Token Test ---------- */
		public function testTokenCreate()
		{
				$secret = "2229e5d6baa0beb436ec4e2d0be262f08c7eab3d";
				$this -> assertNotNull ($this -> token -> create_token(10,$this -> getUserName($this -> utility -> getUser())));
		}
  }
