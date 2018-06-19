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

      $list[] = array("message" => $productCode . " has been Added to Your Cart" , "flicker" => "<div id='cart_content_ajax'><div class='mini-cart-info'><table><tbody><tr><td class='image'><a href='#'><img src='http://localhost/emazonResource/images/Product_Images/cart_image.jpg' width='47px' height='47px' alt='Funda Para Ebook 7&quot; 128GB full HD'></a></td><td class='name'><a href='#'>".$productCode."</a><div></div></td><td class='quantity'>x&nbsp;".$_GET['quantity']."</td><td class='total'>".$_GET['price']."</td><td class='remove'></a></td></tr></tbody></table></div></div>");
      echo json_encode($list);
    }else {
      $list[] = array("error" => "Problem Occured while Adding the Product Try Again");
      echo json_encode($list);
    }




 ?>
