<?php


// Fetch all Products
function getProducts()
{
  $tak = App::get('database')->cartItems("cart");
  $data= json_decode( json_encode($tak), true);

  // $productsContainer = array_map(function ($product){
  //       //var_dump($product["productId"]);
  //       return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
  //                                              $product['productImportDate'], $product['productDescription'], $product['productCode'],
  //                                              $product['productColor'], $product['productSize'], $product['productImage'],
  //                                              $product['rating'], $product['manfacturedBy']);
  // }, $data);

  return $data;
}

  var_dump(getProducts());

  require "views/shopping_cart.view.php";
?>
