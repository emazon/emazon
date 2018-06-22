<?php

  // Fetch all Products

  function getProducts()
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

  function getTopSellingProducts()
  {
    $tak = App::get('database')->queryTopSellingProducts("products" , "order");
    $data= json_decode( json_encode($tak), true);

    $topSaleProducts = array_map(function ($product){
          //var_dump($product["productId"]);
          return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                                 $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                                 $product['productColor'], $product['productSize'], $product['productImage'],
                                                 $product['rating'], $product['manfacturedBy']);
         }, $data);
     return $topSaleProducts;
  }


  function getHotDealOfTheWeek()
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


  require "views/index.view.php";
?>
