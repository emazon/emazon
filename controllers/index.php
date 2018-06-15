<?php

// $result = App::get('database') -> selectAll('todo');
//
//
// $greet = [
//   "gi" => "Hello"
// ];


  $tak = App::get('database')->selectAll("products");
  $data= json_decode( json_encode($tak), true);

  $productsContainer = array_map(function ($product){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                               $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                               $product['productColor'], $product['productSize'], $product['productImage'],
                                               $product['rating'], $product['manfacturedBy']);
  }, $data);


  require "views/index.view.php";
?>
