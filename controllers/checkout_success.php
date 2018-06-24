<?php

function getCartProduct()
{
  $tak = App::get('database')->selectAll("cart");
  $data= json_decode( json_encode($tak), true);

  $cartContainer = array_map(function ($cart){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Cart($cart["cartProductCode"], $cart['quantity'],$cart['price']);
  }, $data);

  return $cartContainer;
}


if(getCartProduct() != 0)
{

    var_dump($_COOKIE['emazon']);

    require "views/checkout_success.view.php";
}else{
    header('location:http://localhost:8888/emazon');
}




 ?>
