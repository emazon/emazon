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

$router -> get('emazon/signup', 'controllers/signup.php'); //SignUp
$router -> post('emazon/register', 'API/register.php');

$router -> get('emazon/resetPassword', 'controllers/resetPassword.php'); // Reset Password
$router -> post('emazon/forgotten', 'API/forgetPass.php'); // Email to User

$router -> get('emazon/reset', 'controllers/reset.php');
$router -> post('emazon/reset', 'API/reset.php');

$router -> get('emazon/products','controllers/index.php');
$router -> get('emazon/checkout', 'controllers/checkout.php');
$router -> get('eMazon/checkout_success', 'controllers/checkout_success.php');
$router -> get('emazon/orders', 'controllers/orders.php');
$router -> get('emazon/cart', 'controllers/shopping_cart.php');
$router -> get('emazon/product/mega_filter/products', 'controllers/product_filter_result.php');
//route=account/wishlist
$router -> get('emazon/wishlist', 'controllers/wishlist.php');

$router -> get('emazon/search_autocomplete', 'API/search_autocomplete.php'); // Auto Complete Search Reult API
$router -> get('emazon/subscribe', 'API/email_subscription.php'); // Mail Subscription API
$router -> get('emazon/product/mega_filter/getajaxinfo', 'API/product_mega_filter.php');
$router -> get('emazon/addtoCart', 'API/addtoCart.php'); //Add To Cart API

$router -> get('emazon/pay', 'API/payment.php'); //Payment
$router -> post('emazon/pay', 'API/payment.php');

$router -> get('emazon/pay/success', 'API/paymentSucess.php');
$router -> post('emazon/pay/success', 'API/paymentSucess.php');

$router -> get('emazon/productAdd', 'controllers/productAdd.php');
$router -> post('emazon/productAdd', 'API/productAdd.php');

$router -> get('emazon/search', 'controllers/search.php');
$router -> get('emazon/search_product', 'controllers/productSearch.php');
$router -> get('emazon/product', 'controllers/productDetail.php');

$router -> get('emazon/about', 'controllers/about.php');
$router -> get('emazon/about/culture', 'controllers/about-culture.php');
$router -> post('emazon/names', 'controllers/add-names.php');


// var_dump($router-> routes);


?>
