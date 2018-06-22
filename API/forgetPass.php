<?php

      if(isset($_POST['submit']))
      {
          \App\Core\Utility::sendEmail($_POST['email'], "Reset Emazon Password",
                    "To reset your password for your ".$_POST['email']."Use the link 'http://localhost:8888/emazon/reset?email='".$_POST['email']."to access your account.");
          header('location:http://localhost:8888/emazon');
      }

 ?>
