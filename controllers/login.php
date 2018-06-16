<?php


    //$user = new \App\Models\User\Customer("Yab","Password");

    //var_dump($user -> getRole());

    //$pass = \App\Core\Utility::hashPassword('password');
    // var_dump($pass);
    // var_dump(\App\Core\Utility::verify('password', $pass));

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        //$userFetched = App::get('database')->verifyUser("users", $_POST['email'], $_POST['password']);
        $userFetched = App::get('database')->selectAll('users');

        $users= \App\Core\Utility::jsonEncodeThenDecode($userFetched);

        $usersContainer = array_map(function ($user){
              //var_dump($product["productId"]);
              return new \App\Models\User\Customer($user["username"] , $user["password"]);
        }, $users);

        $user = new \App\Models\User\User($_POST['username'], $_POST['password']);
        $loginStatus = $user -> isVerified($usersContainer);

        if($loginStatus)
        {
            $user -> setToken();

            var_dump($user -> validateToken());
            header("Location: http://localhost:8888/emazon");


        }else{
          echo "Nothing";
        }
    }




    require "views/login.view.php";



?>
