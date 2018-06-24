
<?php

      use App\Core\Utility;
      use App\Models\User\Register;

      if(isset($_POST['submit']))
      {
        $registerInstance =  new Register($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['telephone'],
                                  $_POST['address'] , $_POST['country'] , $_POST['password'],App::get('database'));

       $registerInstance -> signup();
        //header('location:http://localhost:8888/emazon');
      }

      require "views/signup.view.php";

 ?>
