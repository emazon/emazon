<?php

namespace App\Models\User;
use App\Models\User\Customer;
use App\Core\Utility;

class Register
{

    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $telephone;
    private $address;
    private $country;
    private $password;
    private $role = "Customer";

    private $databaseInstance;

    public function __construct($firstname , $lastname , $username ,$email , $telephone , $address , $country, $password,$databaseInstance)
    {
        $this -> databaseInstance = $databaseInstance;
        $this -> firstname = htmlspecialchars($firstname);
        $this -> lastname = htmlspecialchars($lastname);
        $this -> username = htmlspecialchars($username);
        $this -> email = htmlspecialchars($email);
        $this -> telephone = htmlspecialchars($telephone);
        $this -> address = htmlspecialchars($address);
        $this -> country = htmlspecialchars($country);
        $this -> password = Utility::hashPassword(htmlspecialchars($password));
    }


    public function signup()
    {


      $result = $this -> databaseInstance ->insert('users',

          [
            'firstname' => $this -> firstname,
            'lastname' =>  $this -> lastname,
            'username' => $this -> username,
            'email' => $this -> email,
            'telephone' => $this -> telephone,
            'address' => $this -> address,
            'country' => $this -> country,
            "password" => $this -> password,
            'role' => $this -> role
          ]
        );


        return true;
    }


}


 ?>
