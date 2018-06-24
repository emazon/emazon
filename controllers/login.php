<?php


    if(isset($_POST['username']) && isset($_POST['password']))
    {
        //$userFetched = App::get('database')->verifyUser("users", $_POST['email'], $_POST['password']);
        $userFetched = App::get('database')->selectAll('users');

        $users= \App\Core\Utility::jsonEncodeThenDecode($userFetched);

        $usersContainer = array_map(function ($user){
              return new \App\Models\User\Customer($user["username"] , $user["password"]);
        }, $users);

        $user = new \App\Models\User\Customer($_POST['username'], $_POST['password']);
        $loginStatus = $user -> isVerified($usersContainer);

        if($loginStatus)
        {
            $user -> setToken();

            //var_dump($user -> validateToken());
            header("Location: http://localhost:8888/emazon");


        }else{
          var_dump("Sign in First");
        }
    }




    require "views/login.view.php";



?>
