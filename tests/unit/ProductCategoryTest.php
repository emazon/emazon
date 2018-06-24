<?php

	class ProductCategoryTest extends \PHPUnit_Framework_Testcase
	{

    protected $productCategory;
    protected $sampleCategory = "Ethio-Fashion";
		public function setUp()
    {
			$this -> productCategory = new \App\Models\Product\ProductCategory($this -> sampleCategory);
		}

    /** @test */
    public function testProductCategoryInstance()
    {
        $this -> assertInstanceOf("\App\Models\Product\ProductCategory", $this -> productCategory);
    }

    /** @test */
		public function testProductCategory()
    {
        $this -> assertEquals($this -> productCategory -> getProductCategoryName(),$this -> sampleCategory);
    }

    /** @test */

	}
