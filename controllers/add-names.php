<?php

#var_dump($_SERVER);


App::get('database')->insert('users',
    
    [
    'names' => $_POST['name']
    ]
  );
?>
