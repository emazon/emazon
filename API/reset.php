<?php



    if(isset($_POST['submit']))
    {
      var_dump($_POST['email']);
      App::get('database')->updatePassword('users', \App\Core\Utility::hashPassword($_POST['password']), $_POST['email']);
    }

    header('location:http://localhost:8888/emazon/login');

?>
