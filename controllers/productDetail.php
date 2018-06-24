<?php

  use App\Models\Product\Product;

  if(isset($_GET['route']))
  {
      $product_code = (explode('/',$_GET['route']))[1];
      $product_code = substr($product_code , 11);

      $productInstance = new Product(App::get('database'));
      $productsCounter = $productInstance -> updateProductViewCounter($product_code);


      if($productsCounter <= 0)
      {
          App::get('database')->updateProductViewByInsert("mostViewedItems", $product_code);
      }else{
          App::get('database')->updateProductViewByUpdate("mostViewedItems", $product_code);
      }

      $productInstance = new Product(App::get('database'));
      $product = $productInstance -> getProduct($product_code);

  }




  function getRelatedProducts()
  {
    $product_code = (explode('/',$_GET['route']))[1];
    $product_code = substr($product_code , 11);

    $productInstance = new Product(App::get('database'));
    $products = $productInstance -> getRelatedProducts($product_code);

    return $products;

  }



  require "views/product_detail.view.php";

 ?>
