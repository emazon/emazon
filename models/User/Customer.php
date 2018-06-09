<?php

  namespace App\Models\User;

  class Customer extends User
  {

    private $first_name;
    private $last_name;
    private $address;
    private $phone;
    private $email;

    /* First name Set & Get  ------------ */
    public function setFirstName($name)
    {
      $this->first_name = $name;
    }

    public function getFirstName()
    {
      return $this->first_name;
    }
    /* ------------- First name Set & Get */

    /* Last name Set & Get  ------------ */
    public function setLastName($name)
    {
      $this->last_name = $name;
    }

    public function getLastName()
    {
      return $this->last_name;
    }
    /* ------------- Last name Set & Get */


    /* Address Set & Get  ------------ */
    public function setAddress($address)
    {
      $this->address  = $address;
    }

    public function getAddress()
    {
      return $this->address;
    }
    /* ------------- Address Set & Get */


    /* Phone Set & Get  ------------ */
    public function setPhone($phone)
    {
      $this->phone = $phone;
    }

    public function getPhone()
    {
      return $this->phone;
    }
    /* ------------- Phone Set & Get */

    /* Email  Set & Get  ------------ */
    public function setEmail($mail)
    {
      $this->email = $mail;
    }

    public function getEmail()
    {
      return $this->email;
    }
    /* ------------- Email Set & Get */


    public function register($firstname, $lastname , $address , $phone , $email , $password)
    {
        
    }

    public function login($username , $password)
    {

    }

    public function updateProfile()
    {

    }

    public function search()
    {

    }


  }
