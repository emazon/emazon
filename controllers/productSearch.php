<?php

  //echo "Am here " . $_GET['catagory'];
  require "views/products_view_searched_by_category.view.php";

  $tak = App::get('database')->selectAll("products");
  $data= json_decode( json_encode($tak), true);

  $productsContainer = array_map(function ($product){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Product($product["productName"] , $product["productDescription"]);
  }, $data);

 ?>
