<?php

// $router -> define([
//   'emazon' => 'controllers/index.php',
//   'emazon/about' => 'controllers/about.php',
//   'emazon/about/culture' => 'controllers/about-culture.php',
//   'emazon/contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-names.php'
//
// ]);

$router -> get('emazon', 'controllers/index.php');

$router -> get('emazon/login', 'controllers/login.php');
$router -> post('emazon/login', 'controllers/login.php');

$router -> get('emazon/signup', 'controllers/signup.php');
$router -> get('emazon/products','controllers/index.php');
$router -> get('emazon/checkout', 'controllers/checkout.php');
$router -> get('emazon/orders', 'controllers/orders.php');
//route=account/wishlist
$router -> get('emazon/wishlist', 'controllers/wishlist.php');

$router -> get('emazon/search', 'controllers/search.php');
$router -> get('emazon/search_product', 'controllers/productSearch.php');
$router -> get('emazon/product', 'controllers/productDetail.php');

$router -> get('emazon/about', 'controllers/about.php');
$router -> get('emazon/about/culture', 'controllers/about-culture.php');
$router -> post('emazon/names', 'controllers/add-names.php');


// var_dump($router-> routes);


?>
