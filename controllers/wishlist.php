<?php

  function getWishlistProducts()
  {
      $tak = App::get('database')->selectAll("wishlist");
      $data= json_decode( json_encode($tak), true);

      $cartContainer = array_map(function ($cart){
            //var_dump($product["productId"]);
            return new \App\Models\Product\Wishlist($cart["cartProductCode"], $cart['quantity'],$cart['price']);
      }, $data);

      return $cartContainer;
  }

  var_dump(getWishlistProducts());

  require "views/wishlist.view.php";

 ?>
