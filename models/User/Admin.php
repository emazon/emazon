<?php

  namespace App\Models\User;
  use App\Core\Utility;
  use App\Models\Product\ProductCategory;

  class Admin extends User
  {
      //Username and password has been passed By Inheritance

      private $databaseInstance;
      private $product;
      private $user;

      public function __construct($databaseInstance=NULL)
      {

          $this -> databaseInstance = $databaseInstance;

      }

      public function getUserRole($user)
      {
          $databaseResults = $this -> databaseInstance -> selectUserRole("users", $user);
          $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

          return $resultsDecoded;
      }

      public function getProductCatagories()
      {
        $databaseResults = $this -> databaseInstance -> selectAll("productcategory");
        $resultsDecoded= Utility::jsonEncodeThenDecode($databaseResults);

        $productCatagories = array_map(function ($product){
              return new ProductCategory($product["productCategoryName"]);
        }, $resultsDecoded);
        return $productCatagories;
      }

      public function addProduct($productName, $productQuantity, $productPrice, $productDescription, $productSize, $productCode,
                                  $productImage, $productImageZoomed , $productManfacturer)
      {
          $this -> databaseInstance ->insert('products',

              [
                'productName' => $productName,
                'productQuantity' =>  $productQuantity,
                'productPrice' => $productPrice,
                'productDescription' => $productDescription,
                'productSize' => $productSize,
                'productCode' => $productCode,
                'productImage' => $productImage,
                "productImageZoomed" => $productImageZoomed,
                'manfacturedBy' => $productManfacturer
              ]
            );
            return true;
      }

      public function deleteProduct()
      {

      }

      public function addProductGroup($productGroupName)
      {

      }

      public function deleteProductGroup($productGroupName){

      }

  }
