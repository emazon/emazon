<?php

  /** Fetches  Products */
  function getProducts()
  {
    $productInstance = new \App\Models\Product\Product(App::get('database'));
    $products = $productInstance -> getProducts();
    return $products;
  }

  /** Fetches Top Selling Products */
  function getTopSellingProducts()
  {
    $productInstance = new \App\Models\Product\Product(App::get('database'));
    $products = $productInstance -> getTopSellingProducts();
    return $products;

  }

  /** Fetches Products */
  function getHotDealOfTheWeek()
  {

    return getProducts();
  }


  require "views/index.view.php";
?>
