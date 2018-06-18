<?php

	class CartTest extends \PHPUnit_Framework_Testcase
	{

    protected $cart;
    protected $product;


    public function setUp()
    {
        $this -> cart = new \App\Models\Product\Cart("#Emazon_78", 7 , 750);
        $this -> product = [
            new \App\Models\Product\Product("Dell XPS 13", 58 , 999 , NULL , NULL , "#Emazon_457", "Black", NULL, NULL, 0 , "Dell"),
            new \App\Models\Product\Product("Iphone 5", 40 , 630 , NULL , NULL , "#Emazon_459", "Golden", NULL, NULL, 0 , "Apple"),
            new \App\Models\Product\Product("Sony Television", 22 , 200 , NULL , NULL , "#Emazon_463", "Grey", NULL, NULL, 0 , "Sony")
        ];

    }



    /** @test */
    public function testProductCode()
    {
        $this -> assertEquals($this -> cart -> getProductCode(),'#Emazon_78');
    }

    /** @test */
    public function testProductQuantity()
    {
        $this -> assertNotNull($this -> cart -> getProductQuantity());
    }

    /** @test */
    public function testProductPrice()
    {
        $this -> assertNotNull($this -> cart -> getProductPrice());
    }

    /** @test */
    public function testGetCartTotal()
    {
        $this -> assertNotNull($this -> cart -> getCartTotal(new \App\Models\Product\Product()));
    }

    /** @test */
    public function testGetCartTotalResult()
    {
        $sum = 0;
        foreach($this -> product as $product)
        {
            $sum += $product -> getProductPrice() * $product -> getProductQuantity();
        }

        $this -> assertEquals($this -> cart -> getCartTotal($this -> product), $sum);
    }

    /** @test */
    public function testGetProductTax()
    {
        $this -> assertEquals($this -> cart -> getProductTax() , 0.2);
    }

    /** @test */
    public function  testProductTaxResult()
    {
        $sum = 0;
        $tax = 0.2;
        foreach($this -> product as $product)
        {
            $sum += $product -> getProductPrice() * $product -> getProductQuantity();
        }
        $this -> assertEquals($this -> cart -> getTaxedProductPrice($this -> product), $sum * 0.2 );
    }

    /** @test */
    public function  testGetCartTotalTaxIncluded()
    {
      $sum = 0;
      $tax = 0.2;
      $economyTax = 2;
      foreach($this -> product as $product)
      {
          $sum += $product -> getProductPrice() * $product -> getProductQuantity();
      }
      $this -> assertEquals($this -> cart -> getCartTotalWithTaxIncluded($this -> product), ($sum * $tax) + $sum + $economyTax);
    }

  }
