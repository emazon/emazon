<?php

    use App\Models\User\Login;

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $loginInstance = new Login($_POST['username'], $_POST['password'], App::get('database'));
        $loginStatus = $loginInstance -> login();

        if($loginStatus)
        {
          $loginStatus -> setToken();
          header("Location: http://localhost:8888/emazon");
        }else {
          var_dump("input correct credentials");
        }

    }


    require "views/login.view.php";



?>
