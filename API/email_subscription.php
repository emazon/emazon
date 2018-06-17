<?php


    if(isset($_GET['subscriber']))
    {
      $tak = App::get('database')->checkSubscription("mailsubscription", $_GET['subscriber']);
      if(!$tak)
      {
        App::get('database')->insert('mailsubscription',

            [
            'email' => $_GET['subscriber']
            ]
          );


        //\App\Core\Utility::sendEmail("$_GET['subscriber']","You have successfully Subscribed for eMazon New Letter , Keep In Touch Soon", "Psst", "yeab13me@gmail.com")
        $list = array();
        $list[] = array('message'=> 'You have successfully Subscribed');
      }else{
        $list = array();
        $list[] = array('message'=> "You have already Subscribed");
      }

      echo json_encode($list);
    }

 ?>
