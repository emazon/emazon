<?php

  namespace App\Models\Product;
  
  class Cart
  {

    private $productCode;
    private $productQuantity;
    private $productPrice;
    private $productTax;
    private $productEconomyTax;
    private $productTotalPrice;

    public function __construct($productCode=NULL , $productQuantity=NULL , $productPrice=0.0)
    {
        $this -> productCode = $productCode;
        $this -> productQuantity = $productQuantity;
        $this -> productPrice = $productPrice;
        $this -> productTax = 0.2;
        $this -> productEconomyTax = 2;
    }

    public function setProductCode($productCode)
    {
        $this -> productCode = $productCode;
    }

    public function getProductCode()
    {
        return $this -> productCode;
    }

    public function setProductQuantity($productQuantity)
    {
        $this -> productQuantity = $productQuantity;
    }

    public function getProductQuantity()
    {
        return $this -> productQuantity;
    }

    public function setProductPrice($productPrice)
    {
        $this -> productPrice = $productPrice;
    }

    public function getProductPrice()
    {
        return $this -> productPrice;
    }

    public function getProductTax()
    {
        return $this -> productTax;
    }

    public function getEconomyTax()
    {
        return $this -> productEconomyTax;
    }

    public function getCartTotal($products)
    {
      $sum = 0;
      foreach ($products as $product) {
        // code...
        $sum += $product-> getProductPrice() * $product -> getProductQuantity();
      }
      return $sum;
    }

    public function getTaxedProductPrice($products)
    {
        return $this -> getCartTotal($products) * $this -> getProductTax();
    }

    public function getCartTotalWithTaxIncluded($products)
    {
      return $this -> productTax * $this -> getCartTotal($products) + $this -> getCartTotal($products) + $this -> getEconomyTax();
    }


  }
