<?php
//
// $list = array();
// $list[] = array('name' => 'Yeabsira', 'product_id' => 'eee', "thumb"=> "http://localhost/emazonResource/images/version-04/menu-01.png");
// echo json_encode($list);
//

    if(isset($_GET['productCode']))
    {
      $productCode = $_GET['productCode'];
      App::get('database')->addProductToCart('cart',$_GET['productCode'] , $_GET['price'] , $_GET['quantity']);


      $list[] = array("message" => $productCode . " has been Added to Your Cart");
      echo json_encode($list);
    }




 ?>
