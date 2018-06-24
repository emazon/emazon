<?php
//
// $list = array();
// $list[] = array('name' => 'Yeabsira', 'product_id' => 'eee', "thumb"=> "http://localhost/emazonResource/images/version-04/menu-01.png");
// echo json_encode($list);
//

    if(isset($_GET['productCode']))
    {
      $productCode = $_GET['productCode'];
      App::get('database')->addProductToWishlist('wishlist',$_GET['productCode'] , $_GET['price'] , $_GET['quantity']);

      $list[] = array("message" => $productCode . " has been added to Your Wishlist");
      echo json_encode($list);
    }else {
      $list[] = array("error" => "Problem Occured while Adding the Product Try Again");
      echo json_encode($list);
    }




 ?>
