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


  $secret = "2229e5d6baa0beb436ec4e2d0be262f08c7eab3d";

  $otl = new \App\Core\TokenUtility($secret);

  var_dump($otl->create_token(10,2));
  //$payload = $otl->validate_token($_GET["t"]);

// if ($payload) {
//    echo "<pre>Valid token! You are user #{$payload->uid}";
//    // redirect
// } else {
//    echo "<pre>Invalid token";
// }

  require "views/index.view.php";
?>
