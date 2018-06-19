<?php

  namespace App\Models\User;

  interface TokenInterface
  {
      function setToken();
      function deleteToken();
      function getToken();
      function validateToken();
      function logout();
  }

 ?>
