<?php

  require "views/product_detail.view.php";

  $tak = App::get('database')->selectAll("products");
  $data= json_decode( json_encode($tak), true);

  $productsContainer = array_map(function ($product){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Product($product["productName"] , $product["productDescription"]);
  }, $data);

  //var_dump($data[0]["productName"]);
  //var_dump($productsContainer);

  //var_dump($productsContainer[0]-> getProductName());

 ?>
