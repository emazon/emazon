<?php

namespace App\Core;

use \Firebase\JWT\JWT;

class TokenUtility
{

  private $secret = "2229e5d6baa0beb436ec4e2d0be262f08c7eab3d";

 function __construct() {

 }

function create_token($uid, $username ,$token_duration = 24 /* Hours */) {
    $uid = intval($uid);
    if (!($uid > 0)) return;

    $now = time();

    $data = array();
    $data['uid'] = $uid;
    $data['username'] = $username;
    $data['iat'] = $now;
    $data['exp'] = $now + $token_duration * (60 * 60);

    return JWT::encode($data, $this->secret);
 }

 function validate_token($token) {
    try {
       $payload = JWT::decode($token, $this->secret, array('HS256'));
       //var_dump($payload);
       if (!$payload) return FALSE;
       return json_decode(json_encode($payload));
    } catch (\Firebase\JWT\ExpiredException $e) {
       die(var_dump($e));
       return false;
    }
 }


}

 ?>
