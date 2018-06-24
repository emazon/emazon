<?php

/* ---------------------------------------------------- API ------------------------------------------------------ */

$router -> get('emazon/search_autocomplete', 'API/search_autocomplete.php'); // Auto Complete Search Reult API
$router -> get('emazon/product/mega_filter/getajaxinfo', 'API/product_mega_filter.php');
$router -> get('emazon/addtoCart', 'API/addtoCart.php'); //Add To Cart API
$router -> get('emazon/subscribe', 'API/email_subscription.php'); // Mail Subscription API
$router -> get('emazon/pay', 'API/payment.php'); //Payment
$router -> get('emazon/pay/success', 'API/paymentSucess.php'); // Payment Success
$router -> get('emazon/addtowishlist', 'API/addtoWishlist.php'); // Add to Wishlist

$router -> post('emazon/productAdd', 'API/productAdd.php'); // Add Product Handler
$router -> post('emazon/pay/success', 'API/paymentSucess.php'); // Payment Success Handler
$router -> post('emazon/pay', 'API/payment.php'); // Payment Form Handler
$router -> post('emazon/register', 'API/register.php'); // Register Form Handler
$router -> post('emazon/forgotten', 'API/forgetPass.php'); // Email to User
$router -> post('emazon/reset', 'API/reset.php'); // Reset Password Form Handler

/* ---------------------------------------------------- API ------------------------------------------------------ */

/* ---------------------------------------------------- Page Render ------------------------------------------------------ */

$router -> get('emazon', 'controllers/index.php'); // Homepage
$router -> get('emazon/login', 'controllers/login.php'); // Login
$router -> get('emazon/signup', 'controllers/signup.php'); //SignUp
$router -> get('emazon/cart', 'controllers/shopping_cart.php'); // Cart
$router -> get('emazon/checkout', 'controllers/checkout.php'); // Checkout
$router -> get('emazon/orders', 'controllers/orders.php'); // Order
$router -> get('emazon/product/mega_filter/products', 'controllers/product_filter_result.php'); // Product Category Filter
$router -> get('emazon/checkout_success', 'controllers/checkout_success.php'); // Checkout Success
$router -> get('emazon/wishlist', 'controllers/wishlist.php'); // Wishlist
$router -> get('emazon/productAdd', 'controllers/productAdd.php'); // Add Product
$router -> get('emazon/resetPassword', 'controllers/resetPassword.php'); // Reset Password
$router -> get('emazon/reset', 'controllers/reset.php'); // Reset Password
$router -> get('emazon/products','controllers/index.php');  // Homepage
$router -> get('emazon/product', 'controllers/productDetail.php'); //Product Detail
$router -> get('emazon/myaccount', 'controllers/my_account.php'); // My Account
$router -> get('emazon/404', 'controllers/404.php'); // Page Not Found [ 404 Page]

/* ---------------------------------------------------- Page Render ------------------------------------------------------ */

/* ---------------------------------------------------- Form Handler + Data Fetchers ------------------------------------------------------ */

$router -> post('emazon/login', 'controllers/login.php'); // Login Form Handler

/* ---------------------------------------------------- Form Handler + Data Fetchers ------------------------------------------------------ */


?>
