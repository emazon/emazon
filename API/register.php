<?php

      if(isset($_POST['submit']))
      {
        App::get('database')->insert('users',

            [
              'firstName' => $_POST['firstname'],
              'lastName' =>  $_POST['lastname'],
              'username' => $_POST['username'],
              'email' => $_POST['email'],
              'phone' =>$_POST['telephone'],
              'address' => $_POST['address'],
              'country' => $_POST['country'],
              'password' => \App\Core\Utility::hashPassword($_POST['password']),
              'role' => 'Customer'
            ]
          );
          header('location:http://localhost:8888/emazon');
      }

 ?>
