<?php

$result = $app['database'] -> selectAll('todo');


$greet = [
  "gi" => "Hello"
];

require "views/index.view.php";

?>
