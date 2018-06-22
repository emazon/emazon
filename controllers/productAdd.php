<?php

function getProductCategories()
{
  $tak = App::get('database')->selectAll("productcategory");
  $data= json_decode( json_encode($tak), true);



  $productsContainer = array_map(function ($product){
        return new \App\Models\Product\ProductCategory($product["productCategoryName"]);
  }, $data);

  return $productsContainer;
}





require "views/addProduct.view.php";

 ?>
