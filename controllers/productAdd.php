<?php
use App\Models\User\Admin;
use App\Models\Product\ProductCategory;
use App\Core\TokenUtility;

if(isset($_COOKIE['emazon']))
{

  $otl = new TokenUtility();
  $token = $otl -> validate_token($_COOKIE['emazon']);
  $decoded = get_object_vars($token);

  $user = $decoded['username'];


  $adminInstance = new Admin(App::get('database'));
  $adminRole = $adminInstance -> getUserRole($user);

  $userRole = ($adminRole[0]['role']);

  if($userRole != 'Admin')
  {
      header('location:http://localhost:8888/emazon');
  }
  function getProductCategories()
  {
      $adminInstance = new Admin(App::get('database'));
      $productCategories = $adminInstance -> getProductCatagories();

      return $productCategories;
  }

  require "views/addProduct.view.php";
} else {
      header('location:http://localhost:8888/emazon');
}




 ?>
