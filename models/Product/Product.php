<?php

  namespace App\Models\Product;

  class Product
  {

    private $productId;
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productQuantity;
    private $productImportDate;
    private $productFrontImage;
    private $productCategory;
    private $productManufacturer;
    private $productCode;
    private $productRating;
    private $productColor;
    private $productSize;


    public function __construct($productName=NULL,$productQuantity=0,$productPrice=0.0,$productImportDate=NULL,$productDescription=NULL,$productCode=NULL,
                                $productColor=NULL,$productSize=NULL,$productImage=NULL , $rating=0 ,  $manfacturedBy=NULL
                                )
    {
        $this -> productName = $productName;
        $this -> productQuantity = $productQuantity;
        $this -> productPrice = $productPrice;
        $this -> productImportDate = $productImportDate;
        $this -> productDescription = $productDescription;
        $this -> productCode = $productCode;
        $this -> productSize = $productSize;
        $this -> productFrontImage = $productImage;
        $this -> productRating = $rating;
        $this -> productManufacturer = $manfacturedBy;
    }



    /* Product Id  Set & Get  ------------ */
    public function setProductId($id)
    {
        $this -> productId = $id;
    }

    public function getProductId()
    {
        return $this -> productId;
    }
    /* ------------- Product Id Ends */

    /* Product name  Set & Get  ------------ */
    public function setProductName($name)
    {
        $this -> productName = $name;
    }

    public function getProductName()
    {
        return $this -> productName;
    }
    /* ------------- Product name Ends */


    /* Product description  Set & Get  ------------ */
    public function setProductDescription($description)
    {
        $this -> productDescription = $description;
    }

    public function getProductDescription()
    {
        return $this -> productDescription;
    }
    /* ------------- Product description Ends */


    /* Product Price  Set & Get  ------------ */
    public function setProductPrice($price)
    {
        $this -> productPrice = $price;
    }

    public function getProductPrice()
    {
        return $this -> productPrice;
    }
    /* ------------- Product Price Ends */

    /* Product Quantity  Set & Get  ------------ */
    public function setProductQuantity($quantity)
    {
        $this -> productQuantity = $quantity;
    }

    public function getProductQuantity()
    {
        return $this -> productQuantity;
    }
    /* ------------- Product Quantity Ends */

    /* Product Import Date  Set & Get  ------------ */
    public function setProductImportDate($date)
    {
        $this -> productImportDate = $date;
    }

    public function getProductImportDate()
    {
        return $this -> productImportDate;
    }
    /* ------------- Product Import Date Ends */

    /* Product Front Image  Set & Get  ------------ */
    public function setProductFrontmage($pic)
    {
        $this -> productFrontImage = $pic;
    }

    public function getProductFrontImage()
    {
        return $this -> productFrontImage;
    }
    /* ------------- Product Front Image Ends */

    /* Product Category Set & Get  ------------ */
    public function setProductCategory($productCategory)
    {
        $this -> productCategory = $productCategory;
    }

    public function getProductCategory()
    {
        return $this -> productCategory;
    }
    /* ------------- Product Category Ends */

    /* Product Manfacturer Set & Get  ------------ */
    public function setProductManufacturer($manfacturer)
    {
        $this -> productManufacturer = $manfacturer;
    }

    public function getProductManufacturer()
    {
        return $this -> productManufacturer;
    }
    /* ------------- Product Manfacturer Ends */

    /* ------------- Product Code Set & Get --------------- */
    public function setProductCode($code)
    {
        $this -> productCode = $code;
    }

    public function getProductCode()
    {
        return $this -> productCode;
    }
    /* ------------- Product Code Ends */

    /* ------------- Product Rating Set & Get --------------- */
    public function setProductRating($rateValue)
    {
        $this -> productRating = $rateValue;
    }

    public function getProductRating()
    {
        return $this -> productRating;
    }
    /* ------------- Product Rating Ends*/

    /* ------------- Product Color Set & Get --------------- */
    public function setProductColor($color)
    {
        $this -> productColor = $color;
    }

    public function getProductColor()
    {
        return $this -> productColor;
    }
    /* ------------- Product Color Ends */

    /* ------------- Product Size Set & Get --------------- */
    public function setProductSize($color)
    {
        $this -> productSize = $color;
    }

    public function getProductSize()
    {
        return $this -> productSize;
    }
    /* ------------- Product Size Ends */


    public function getProducts()
    {

    }


  }
