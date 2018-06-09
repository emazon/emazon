<?php

  namespace App\Models\Product;

  class Product
  {

    private $productId;
    private $productName;
    private $productDescription;
    private $productPrice;

    /* Product Id  Set & Get  ------------ */
    public function setProductId($id)
    {
        $this -> productId = $id;
    }

    public function getProductId()
    {
        return $this -> productId;
    }
    /* ------------- Product Id Set & Get */

    /* Product name  Set & Get  ------------ */
    public function setProductName($name)
    {
        $this -> productName = $name;
    }

    public function getProductName()
    {
        return $this -> productName;
    }
    /* ------------- Product name Set & Get */


    /* Product description  Set & Get  ------------ */
    public function setProductDescription($description)
    {
        $this -> productDescription = $description;
    }

    public function getProductDescription()
    {
        return $this -> productDescription;
    }
    /* ------------- Product description Set & Get */


    /* Product price  Set & Get  ------------ */
    public function setProductPrice($price)
    {
        $this -> productPrice = $price;
    }

    public function getProductPrice()
    {
        return $this -> productPrice;
    }
    /* ------------- Product price Set & Get */

  }
