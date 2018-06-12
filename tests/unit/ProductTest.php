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

		/** @test */
		public function testProductQuantity()
		{
			$this -> product -> setProductQuantity(5);
			$this -> assertEquals($this -> product -> getProductQuantity(), 5);
		}

		/** @test */
		public function testProductImportDate()
		{
			$tomorrowDate = strtotime("tomorrow");
			$this -> product -> setProductImportDate($tomorrowDate);
			$this -> assertEquals($this -> product -> getProductImportDate(), $tomorrowDate);
		}

		/** @test */
		public function testProductFrontmage()
		{
			$this -> product -> setProductFrontmage("http://localhost/emazonResource/images/version-04/menu-01.png");
			$this -> assertEquals($this -> product -> getProductFrontImage(), "http://localhost/emazonResource/images/version-04/menu-01.png");
		}

		/** @test */
		public function testProductCategory()
		{
			$this -> product -> setProductCategory("Electronics");
			$this -> assertEquals($this -> product -> getProductCategory(), 'Electronics');
		}

		/** @test */
		public function testProductManufacturer()
		{
			$this -> product -> setProductManufacturer("Apple");
			$this -> assertEquals($this -> product -> getProductManufacturer(), "Apple");
		}

		/** @test */
		public function testProductcode()
		{
			$this -> product -> setProductCode("EMA-87#21");
			$this -> assertNotNull($this -> product -> getProductCode());
		}

		/** @test */
		public function testProductRating()
		{
			$this -> product -> setProductRating(3.6);
			$this -> assertEquals($this -> product -> getProductRating(), 3.6);
		}

		/** @test */
		public function testProductColor()
		{
			$this -> product -> setProductColor("Blue");
			$this -> assertNotNull($this -> product -> getProductColor());
		}

		/** @test */
		public function testProductSize()
		{
			$this -> product -> setProductSize("Medium");
			$this -> assertNotNull($this -> product -> getProductSize());
		}

	}
