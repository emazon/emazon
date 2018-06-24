<?php

if(isset($_COOKIE['emazon']))
{

//  var_dump($_COOKIE['emazon']);
  $otl = new \App\Core\TokenUtility();
  $token = $otl -> validate_token($_COOKIE['emazon']);
  $decoded = get_object_vars($token);

  $user = $decoded['username'];

  $tak = App::get('database')->selectUserRole("users", $user);
  $data= json_decode( json_encode($tak), true);

  $userRole = ($data[0]['role']);
  if($userRole != 'Admin')
  {
      header('location:http://localhost:8888/emazon');
  }
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
} else {
      header('location:http://localhost:8888/emazon');
}




 ?>
