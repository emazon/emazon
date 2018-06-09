<?php

    $user = new \App\Models\User\Customer("Yab","Password");

    var_dump($user -> getRole());

    require "views/login.view.php";



?>
