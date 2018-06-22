<?php

  if(isset($_GET['route']))
  {
    $product_code = (explode('/',$_GET['route']))[1];
    $product_code = substr($product_code , 11);

    $tak = App::get('database')->updateProductViewCounter("mostViewedItems", $product_code);
    $data= json_decode( json_encode($tak), true);

    $counter = (count($data));
    if($counter <= 0)
    {
        App::get('database')->updateProductViewByInsert("mostViewedItems", $product_code);
    }else{
        App::get('database')->updateProductViewByUpdate("mostViewedItems", $product_code);
    }

    $tak = App::get('database')->getProduct("products" , $product_code);
    $data= json_decode( json_encode($tak), true);

    //var_dump($data);
    $productsContainer = array_map(function ($product){
          //var_dump($product["productId"]);
          return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                                 $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                                 $product['productColor'], $product['productSize'], $product['productImage'],
                                                 $product['productImageZoomed'],
                                                 $product['rating'], $product['manfacturedBy']);
    }, $data);


  }

  function getProductGalleryImages()
  {
    $product_code = (explode('/',$_GET['route']))[1];
    $product_code = substr($product_code , 11);

    $tak = App::get('database')->getProductImages("productgallery" , $product_code);
    $data= json_decode( json_encode($tak), true);


    $productsContainer = array_map(function ($product){
          //var_dump($product["productId"]);
          return new \App\Models\Product\Product(NULL, NULL,NULL ,
                                                 NULL, NULL, NULL,
                                                 NULL, NULL, $product['galleryPhoto'],
                                                 NULL, NULL);
    }, $data);

    return $productsContainer;
  }



  function getRelatedProducts()
  {
    $product_code = (explode('/',$_GET['route']))[1];
    $product_code = substr($product_code , 11);

    $tak = App::get('database')->getRelatedProducts("products" , $product_code);
    $data= json_decode( json_encode($tak), true);


    $cleanData = array_filter($data, function($value) {
            if($value['productName'] != NULL){
              return $value;
            }
    });

    $nullFreeProducts = array_map(function ($product){
          //var_dump($product["productId"]);
          return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                                 NULL, NULL, $product['productCode'],
                                                 NULL, NULL, $product['productImage'],
                                                 $product['rating'],NULL);
    }, $cleanData);

    return $nullFreeProducts;

  }

  getRelatedProducts();


  require "views/product_detail.view.php";





  // $tak = App::get('database')->selectAll("products");
  // $data= json_decode( json_encode($tak), true);
  //
  // $productsContainer = array_map(function ($product){
  //       //var_dump($product["productId"]);
  //       return new \App\Models\Product\Product($product["productName"] , $product["productDescription"]);
  // }, $data);

  //var_dump($data[0]["productName"]);
  //var_dump($productsContainer);

  //var_dump($productsContainer[0]-> getProductName());




 ?>
