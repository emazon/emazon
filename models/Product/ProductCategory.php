<?php

    namespace App\Models\Product;

    class ProductCategory
    {

      private $productCategoryName;

      public function __construct($productCatName)
      {
          $this -> productCategoryName = $productCatName;
      }

      public function getProductCategoryName()
      {
          return $this -> productCategoryName;
      }

    }

 ?>
