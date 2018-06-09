<?php

	class ProductTest extends \PHPUnit_Framework_Testcase
	{

    protected $product;

		public function setUp()
    {
			$this -> product = new \App\Models\Product\Product;
		}

    /** @test */
		public function testProductId()
    {
      $this -> product -> setProductId('emazon#8796');
      $this -> assertEquals($this -> product -> getProductId(),'emazon#8796');
    }

    /** @test */
    public function testProductName()
    {
      $this -> product -> setProductName('Dell XPS 15 Laptop');
      $this -> assertEquals($this -> product -> getProductName(), 'Dell XPS 15 Laptop');
    }

    /** @test */
    public function testProductDescription()
    {
      $this -> product -> setProductDescription('7th Generation awesome Laptop');
      $this -> assertEquals($this -> product -> getProductDescription(), '7th Generation awesome Laptop');
    }

    /** @test */
    public function testProductPrice()
    {
      $this -> product -> setProductPrice(986.63);
      $this -> assertEquals($this -> product -> getProductPrice(), 986.63);
    }
	}
