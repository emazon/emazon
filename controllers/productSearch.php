<?php

function getProductNameFromUrl()
{

  $url = $_GET['category'];

  if($url == 'ethio_fashion')
  {
    return "Ethiopian Fashion";
  }else if($url == 'smartphones')
  {
    return "Smartphones";
  } else if($url == 'desk_laptop')
  {
    return "Desktop & Laptops";
  } else if($url == 'game_console')
  {
    return "Gaming Consoles";
  } else if($url == 'watches')
  {
    return "Watches";
  } else if($url == 'accessories')
  {
    return "Accessories";
  }
}

function getProductsByCategory()
{
  $tak = App::get('database')->getProductByCategory("products", $_GET['category']);
  $data= json_decode( json_encode($tak), true);

  $productsContainer = array_map(function ($product){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                               $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                               $product['productColor'], $product['productSize'], $product['productImage'],
                                               $product['rating'], $product['manfacturedBy']);
  }, $data);

  return $productsContainer;
}

function getProducts()
{
  $tak = App::get('database')->selectAll("products");
  $data= json_decode( json_encode($tak), true);

  $productsContainer = array_map(function ($product){
        //var_dump($product["productId"]);
        return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                               $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                               $product['productColor'], $product['productSize'], $product['productImage'],
                                               $product['rating'], $product['manfacturedBy']);
  }, $data);

  return $productsContainer;
}
  //echo "Am here " . $_GET['catagory'];
  require "views/products_view_searched_by_category.view.php";


 ?>
