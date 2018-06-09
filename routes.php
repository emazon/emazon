<?php

// $router -> define([
//   'emazon' => 'controllers/index.php',
//   'emazon/about' => 'controllers/about.php',
//   'emazon/about/culture' => 'controllers/about-culture.php',
//   'emazon/contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-names.php'
//
// ]);

$router -> get('Project', 'controllers/index.php');
$router -> get('emazon/about', 'controllers/about.php');
$router -> get('emazon/about/culture', 'controllers/about-culture.php');
$router -> post('emazon/names', 'controllers/add-names.php');


//var_dump($router-> routes);

?>
