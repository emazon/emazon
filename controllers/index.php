<?php

$result = App::get('database') -> selectAll('todo');


$greet = [
  "gi" => "Hello"
];

require "views/index.view.php";

?>
