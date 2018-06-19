<?php

    $all_products = array();

    function getProductsByCategory($category_name)
    {
      $result = App::get('database')->getProductByCategory('products',$category_name);
      $data= json_decode( json_encode($result), true);

      //var_dump($data);
      $productsContainer = array_map(function ($product){
            //var_dump($product["productId"]);
            return new \App\Models\Product\Product($product["productName"], $product['productQuantity'],$product['productPrice'] ,
                                                   $product['productImportDate'], $product['productDescription'], $product['productCode'],
                                                   $product['productColor'], $product['productSize'], $product['productImage'],
                                                   $product['rating'], $product['manfacturedBy']);
      }, $data);
      //var_dump($productsContainer);
      return $productsContainer;
    }

    function fetchEachProduct($word)
    {
      foreach ($word as $productIdentifier) {
        // code...

        //Product categories
        $tv_video = "TV & Video"; //60
        $headphones = "Headphones"; //63
        $ethio_fashion = "Ethio-Fashion"; //65
        $camera_photo_video = "Camera, Photo & Video "; //61
        $computer_tabs = "Computers & Tablets "; //67
        $gaming_consoles = "Gaming Console "; //66
        $home_appliances = "Home Appliances"; //69
        $home_audio_theater = "Home Audio & Theater"; //59
        $monitors = "Monitors"; //68
        $office_supplies = "Office Supplies"; //70
        $video_games = "Video Games"; //64
        $cellphone_accessories = "Cell Phones & Accessories"; //62

        $all_products = array();

        if($productIdentifier == 61)
        {
          array_push($all_products, getProductsByCategory($camera_photo_video));
        }else if($productIdentifier == 62){
          array_push($all_products, getProductsByCategory($cellphone_accessories));
        } else if($productIdentifier == 60)
        {
          array_push($all_products, getProductsByCategory($tv_video));
        } else if($productIdentifier == 63)
        {
          array_push($all_products, getProductsByCategory($headphones));
        } else if($productIdentifier == 65)
        {
          array_push($all_products, getProductsByCategory($ethio_fashion));
        } else if($productIdentifier == 67)
        {
          array_push($all_products, getProductsByCategory($computer_tabs));
        } else if($productIdentifier == 66)
        {
          array_push($all_products, getProductsByCategory($gaming_consoles));
        } else if($productIdentifier == 69)
        {
          array_push($all_products, getProductsByCategory($home_appliances));
        } else if($productIdentifier == 59)
        {
          array_push($all_products, getProductsByCategory($home_audio_theater));
        } else if($productIdentifier == 68)
        {
          array_push($all_products, getProductsByCategory($monitors));
        } else if($productIdentifier == 70)
        {
          array_push($all_products, getProductsByCategory($office_supplies));
        } else if($productIdentifier == 64)
        {
          array_push($all_products, getProductsByCategory($video_games));
        }

      }

      return  $all_products[0];
      //var_dump($all_products);
    }


    function getRelatedProducts()
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

    function query()
    {
      if(isset($_GET['mfp']))
      {
        $word = substr($_GET['mfp'] , 5 );
        $word = explode(',', $word);
        //var_dump(fetchEachProduct($word));
        return fetchEachProduct($word);
      }
    }



    require "views/product_filtered_page.view.php";

 ?>
