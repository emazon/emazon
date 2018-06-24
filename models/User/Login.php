<?php

namespace App\Models\User;
use App\Models\User\Customer;
use App\Core\Utility;

class Login
{

    private $username;
    private $password;
    private $databaseInstance;

    public function __construct($username , $password, $databaseInstance)
    {
        $this -> username = htmlspecialchars($username);
        $this -> password = htmlspecialchars($password);
        $this -> databaseInstance = $databaseInstance;
    }


    public function login()
    {
      $userFetched = $this -> databaseInstance -> selectAll('users');

      $users= Utility::jsonEncodeThenDecode($userFetched);

      $usersContainer = array_map(function ($user){
            return new Customer($user["username"] , $user["password"]);
      }, $users);

      $user = new Customer($this -> username, $this -> password);
      $loginStatus = $user -> isVerified($usersContainer);

      return $loginStatus;
    }


}


 ?>
