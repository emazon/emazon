<?php

    //Product categories
    $camera_photo_video = 61;
    $cell_phones_accessories = 62;
    $bluetooth_speakers = 65;

    $all_products = array();

    function getCameraPhotoVideoProducts()
    {
      $result = App::get('database')->getProductByCategory('products','HeadPhones');
      $data= json_decode( json_encode($result), true);

      //var_dump($data);
      $productsContainer = array_map(function ($product){
            //var_dump($product["productId"]);
            return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                                   $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                                   $product['productColor'], $product['productSize'], $product['productImage'],
                                                   $product['rating'], $product['manfacturedBy']);
      }, $data);
      //var_dump($productsContainer);
      return $productsContainer;
    }

    function fetchEachProduct($word)
    {
      foreach ($word as $productIdentifier) {
        // code...
        if($productIdentifier == 61)
        {
          return getCameraPhotoVideoProducts();
        }

      }
    }

    function fetchProducts()
    {
      //var_dump($_GET['mfp']);
      if(isset($_GET['mfp']))
      {
          $word = substr($_GET['mfp'] , 5  , -1);
          $word = explode(',', $word);

          return fetchEachProduct($word);
      }
    }

    function getRelatedProducts()
    {


      $tak = App::get('database')->selectAll("products");
      $data= json_decode( json_encode($tak), true);
      
      $productsContainer = array_map(function ($product){
            //var_dump($product["productId"]);
            return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                                   $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                                   $product['productColor'], $product['productSize'], $product['productImage'],
                                                   $product['rating'], $product['manfacturedBy']);
      }, $data);

      return $productsContainer;

    }


    require "views/product_filtered_page.view.php";

 ?>
