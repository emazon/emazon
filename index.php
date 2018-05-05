<?php

require "core/bootstrap.php";

require "Task.php";


require Router::load('routes.php')
        -> direct(Request::uri());

?>
