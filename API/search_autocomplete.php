<?php

    if(isset($_GET['filter_name']))
    {

      $tak = App::get('database')->selectProductsForSearch("products");
      $data= json_decode( json_encode($tak), true);

      echo json_encode($data);

      // $list = array();
      // $list[] = array('name' => 'mee', 'product_id' => 'eee', "thumb"=> "http://localhost/emazonResource/images/version-04/menu-01.png");
      // echo json_encode($list);
    }


 ?>
