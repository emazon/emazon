<?php

  namespace App\Models\User;

  class User
  {

    protected $username;
    protected $password;

    public function __construct($username , $password)
    {
      $this -> username = $username;
      $this -> password = $password;
    }

    public function getUserName()
    {
      return $this -> username;
    }

    public function getPassword()
    {
      return $this -> password;
    }

    public function verifyPassword($password)
    {
      return \App\Core\Utility::verify($password, $this -> getPassword());
    }

    public function isVerified($usersContainer)
    {
      foreach ($usersContainer as $user) {
        // code...

        if($this -> getUserName() == $user -> getUserName())
        {
          if($user -> verifyPassword($this-> getPassword()))
          {
              return true;
          }
        }

      }
      return false;
    }

    public function setToken()
    {


        $otl = new \App\Core\TokenUtility();

        setcookie("emazon", $otl->create_token(10,$this -> getUserName()));
    }

    public function deleteToken()
    {
       unset($_COOKIE['emazon']);
    }

    public function getToken()
    {
      if(isset($_COOKIE['emazon']))
      {
          return $_COOKIE['emazon'];
      }else{
          return false;
      }

    }

    public function validateToken()
    {
        try {
          $otl = new \App\Core\TokenUtility();
          return $otl -> validate_token($this -> getToken());
        } catch(\Firebase\JWT\ExpiredException $e){
          return false;
        }

    }

    public function logOut()
    {
      $this -> deleteToken();
    }

  }
